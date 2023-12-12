<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\TransactionDetail;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent;

class TransactionController extends Controller
{

    public function showItems()
    {
        $userId = Auth::id();
        $items = Carts::where('userId', $userId)->get();

        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += $item->herbPrice;
        }

        return view('main.transaction', [
            'items' => $items,
            'totalPrice' => $totalPrice,
            'userId' => $userId
        ]);
    }


    public function checkOut(Request $request)
    {
        $userId = Auth::id();
        $items = Carts::where('userId', $userId)->get();

        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += $item->herbPrice;
        }

        $validatedData = $request->validate(
            [
                'userId' => 'required',
                'paymentMethod' => 'required',
                'courier' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zipcode' => 'required',
                'country' => 'required',
                'totalPrice' => 'required'
            ],
            [
                'paymentMethod.required' => 'Please select your payment method.',
                'courier.required' => 'Please select your courier.',
                'address.required' => 'Please enter your address.',
                'city.required' => 'Please enter your city.',
                'state.required' => 'Please enter your state.',
                'zipCode.required' => 'Please enter your zipCode.',
                'country.required' => 'Please enter your country.',
            ]
        );



        Transactions::create($validatedData);

        // Store Transaction Detail
        $carts = Carts::where('userId', $userId)->get();
        $transId = Transactions::where('userId', $userId)->get();
        foreach ($carts as $cart) {
            TransactionDetail::create([
                'transId' => $transId[count($transId) - 1]->transId,
                'herbsId' => $cart->herbsId,
                'quantity' => $cart->quantity,
                'price' => $cart->herbPrice
            ]);
        }

        // Delete Cart
        $records = Carts::where('userId', $userId)->get();
        if ($records->isNotEmpty()) {
            foreach ($records as $record) {
                $record->delete();
            }
        }


        return redirect('/')->with('success', 'Check Out successful !');
    }
}