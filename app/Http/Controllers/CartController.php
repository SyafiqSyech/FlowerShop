<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;
use App\Models\Herbs;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Log;
use App\Models\Favorites;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = Auth::id();

        $existingCarts = Carts::where('userId', $userId)->get();

        $favorites = Favorites::where('userId', $userId)
            ->whereIn('herbsId', $existingCarts->pluck('herbsId'))
            ->pluck('herbsId')
            ->toArray();

        //itung total harga
        $totalPrice = 0;
        foreach ($existingCarts as $cart) {
            $totalPrice += $cart->herbPrice;
        }
        // @php
        //                 $cartItems = \App\Models\Carts::where('userId', auth()->id())->get();
        //             @endphp
        //             @if ($cartItems->isEmpty())
        //                 <a href="{{ route('herbs') }}" class="nav__link">Cart</a>
        //             @else
        //                 <a href="{{ route('cart') }}" class="nav__link">Cart</a>
        //             @endif


        $herbs = Herbs::all();
        $alchemicalHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Alchemical' ",);
        $exoticHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Exotic' ",);
        $swiftgrowHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Swiftgrow' ",);

        if (count($existingCarts) <= 0) {
            return redirect()->route('herbs')->with('success', 'No herbs in your cart! How about start looking for one?');
        } else {
            return view('main.cart', [
                'carts' => $existingCarts,
                'totalPrice' => $totalPrice,
                'favorites' => $favorites
            ]);
        }
    }

    public function storeToCarts($id)
    {
        //
        $userId = Auth::id();

        $herbs = Herbs::findOrFail($id);

        $existingCart = Carts::where('userId', $userId)->where('herbsId', $herbs->herbsId)->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->herbPrice *= $existingCart->quantity;
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

    public function removeFromCarts($id)
    {
        $userId = Auth::id();

        $cart = Carts::where('cartsId', $id)
            ->where('userId', $userId)
            ->first();

        if ($cart) {
            $cart->delete();

            $isCartEmpty = Carts::where('userId', $userId)->count() == 0;

            $userId = Auth::id();

            $existingCarts = Carts::where('userId', $userId)->get();

            $totalPrice = 0;
            foreach ($existingCarts as $cart) {
                $totalPrice += $cart->herbPrice;
            }

            $formattedTotalPrice = '$ ' . number_format($totalPrice);

            return response()->json(['status' => 'success', 'message' => 'Item removed from cart', 'isCartEmpty' => $isCartEmpty, 'newTotalPrice' => $formattedTotalPrice]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Remove Failed!']);
        }
    }

    public function editCartsItem(Request $request)
    {
        // $carts = Carts::findOrFail($id);

        // $quantity = $request->input('qty');
        // $carts->quantity = $quantity;
        // $carts->herbPrice = $carts->herbPrice * $quantity;
        // $carts->save();

        $cart = Carts::find($request->cartsId);

        if ($cart) {
            $originalHerbPrice = Herbs::where('herbsId', $cart->herbsId)->value('herbPrice');

            $cart->quantity = $request->quantity;
            $cart->herbPrice = $originalHerbPrice * $request->quantity;

            $cart->save();

            $userId = Auth::id();

            $existingCarts = Carts::where('userId', $userId)->get();

            $totalPrice = 0;
            foreach ($existingCarts as $cart) {
                $totalPrice += $cart->herbPrice;
            }

            $formattedHerbPrice = '$ ' . number_format($cart->herbPrice);
            $formattedTotalPrice = '$ ' . number_format($totalPrice);

            return response()->json(['success' => true, 'newHerbPrice' => $formattedHerbPrice, 'newTotalPrice' => $formattedTotalPrice]);
        }

        // return redirect()->route('cart');
        return response()->json(['success' => false]);
    }

    // public function increaseQuantity($cartsId)
    // {
    //     $carts = Carts::findOrFail($cartsId);
    //     $quantity = $carts->quantity + 1;
    //     $carts->update(['quantity' => $quantity]);
    // }
    // public function decreaseQuantity($cartsId)
    // {
    //     $carts = Carts::findOrFail($cartsId);
    //     $quantity = $carts->quantity - 1;
    //     $carts->update(['quantity' => $quantity]);
    // }


}
