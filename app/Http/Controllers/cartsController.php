<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\music;

class cartsController extends Controller
{
  public function cart() {
      $sessionCart = session()->get('cart');
      return view('cart',compact('sessionCart'));
    //
  }
  public function addToCart($id)
      {

          $product = Music::find($id);
          if(!$product) {
              abort(404);
          }

          $cart = session()->get('cart');

          // if cart is empty then this the first product
          if(!$cart) {
              $cart = [
                      $id => [
                          "name" => $product->titulo,
                          "quantity" => 1,
                          "price" => $product->price,
                          "photo" => $product->avatar
                      ]
              ];
              session()->put('cart', $cart);
              return redirect()->back()->with('success', 'Product added to cart successfully!');
          }
          // if cart not empty then check if this product exist then increment quantity
          if(isset($cart[$id])) {
              $cart[$id]['quantity']++;
              session()->put('cart', $cart);
              //return $cart;
              return redirect()->back()->with('success', 'Product added to cart successfully!');
          }
          // if item not exist in cart then add to cart with quantity = 1
          $cart[$id] = [
              "name" => $product->titulo,
              "quantity" => 1,
              "price" => $product->price,
              "photo" => $product->avatar
          ];
          session()->put('cart', $cart);
          //return $cart;
          return redirect()->back()->with('success', 'Product added to cart successfully!');
      }
      public function remove(Request $request)
  {
      if($request->id) {

          $cart = session()->get('cart');

          if(isset($cart[$request->id])) {

              unset($cart[$request->id]);

              session()->put('cart', $cart);
          }

          session()->flash('success', 'Product removed successfully');
      }
  }
}
