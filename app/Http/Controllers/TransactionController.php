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

    // public function 

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

        // Delete Cart
        $records = Carts::where('userId', $userId)->get();
        if ($records->isNotEmpty()) {
            foreach ($records as $record) {
                $record->delete();
            }
        }

        // Store Transaction Detail (Masih belum bisa)
        // $transId = Transactions::where('transId', $transId)->get();
        // dd($transId);
        // $herbsId = Carts::where('herbsId', $herbsId)->get();
        // $quantity = Carts::where('quantity', $quantity)->get();
        // $price = Carts::where('herbPrice', $herbPrice)->get();

        // TransactionDetail::create([
        //     'transId' => $transId,
        //     'herbsId' => $herbs->herbsId,
        //     'quantity' => $quantity,
        //     'price' => $price
        // ]);

        return redirect('/')->with('success', 'Check Out successful !');
    }
}
