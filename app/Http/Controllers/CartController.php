<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
    	$validated = $request->validate([
    		'quantity' => 'required'
    	]);

        $product = App\Product::find($id);

        $item = [
        	'id' => $product->id,
        	'title' => $product->title,
        	'quantity' => $validated['quantity'],
        	'price' => $product->price
        ];

        $cart = new ShoppingCart();
        $notExist = $cart->addtoCart($item);

        if($notExist === true){
            return redirect()->action('CartController@index');
        } else{
            session()->flash('error', 'You already have this product in your cart.');
            return redirect()->back();
        }
    }

    public function index()
    {
        $cart = new ShoppingCart();
        $items = $cart->getItems();
        return view('pages/cart', compact('items'));
    }

    public function clearCart(){
        $cart = new ShoppingCart();
        $cart->clearCart();
        
        return redirect()->action('CartController@index');
    }

    public function deleteItem($id){
        $cart = new ShoppingCart();
        $cart->deleteItem($id);
        
        return redirect()->action('CartController@index');
    }

    public function updateCart(Request $request, $id){
        $valData = $request->validate([
    		'quantity' => 'required'
    	]);

        $cart = new ShoppingCart();
        $cart->updateItem($valData , $id);
        return redirect()->action('CartController@index');
    } 
}
