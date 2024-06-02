<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menuitem' => 'required|exists:menuitem',
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'menuitem' => $request->menuitem],
            ['quantity' => \DB::raw('quantity + ' . $request->quantity)]
        );

        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }
}

}
