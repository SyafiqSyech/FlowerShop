<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;
use App\Models\Herbs;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $existingCarts = Carts::all();

        return view('main.cart', [
            'carts' => $existingCarts
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreCartRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function storeToCarts($id)
    {
        //
        $userId = Auth::id();

        $herbs = Herbs::findOrFail($id);

        $existingCart = Carts::where('userId', $userId)->where('herbsId', $herbs->herbsId)->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->save();
        } else {
            Carts::create([
                'userId' => $userId,
                'herbsId' => $herbs->herbsId,
                'herbsImage' => $herbs->herbsImage,
                'herbName' => $herbs->herbName,
                'herbPrice' => $herbs->herbPrice,
                'quantity' => 1
            ]);
        }

        // dd(session('success'));
        // sleep(0.5);
        $successMessage = 'Herbs added to cart successfully!';
        return redirect()->route('show', ['id' => $id, 'successMessage' => $successMessage]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Cart $cart)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateCartRequest $request, Cart $cart)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Cart $cart)
    // {
    //     //
    // }
}
