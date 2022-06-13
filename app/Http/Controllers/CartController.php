<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orderlines = null;
        $subtotal = 0;
        $user = Auth::id();

        if ($user) {
            $cart = Cart::where('user_id', $user)->first();

            if ($cart) {

                $orderlines = $cart->orderlines()->where('cart_id', $cart->id)->get();
                
            } else {
                
                $newCart = new Cart();
                $newCart->user_id = $user;
                $newCart->save();
                $c = Cart::where('user_id', $user)->first();
                $orderlines = $c->orderlines()->where('cart_id', $c->id)->get();
            }

            //gestion de la redondance dans le panier


            $subtotals = Collect($orderlines)->map(function ($ln) {
                return  $ln->order_quantity * $ln->product->price;
            })->toArray();

            $subtotal = collect($subtotals)->sum();
        }
        return view('user.products.cart', compact('orderlines', 'subtotal'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();

        if ($user) {
            $cart = Cart::where('user_id', $user)->first();

            if ($cart) {

                $orderline = new OrderLine();
                $orderline->cart_id = $cart->id;
                $orderline->product_id = $request->product_id;
                $orderline->order_quantity = $request->order_quantity;

                $orderline->save();
            } else {

                //creer un panier pour un utilisateur
                $newCart = new Cart();
                $newCart->user_id = $user;
                $newCart->save();
                printf("creer un panier");
                $c = Cart::where('user_id', $user)->first();

                $orderline = new OrderLine();
                $orderline->cart_id = $c->id;
                $orderline->product_id = $request->product_id;
                $orderline->order_quantity = $request->order_quantity;

                $orderline->save();
            }

            return redirect()->back()->with('message-success', 'Product added To cart succefull !');
        } else {
            return redirect('/login');
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**
     * Delete orderline from storage
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function deleteOrderLine(OrderLine $orderline)
    {
        $orderline->delete();
        return redirect()->back();
    }



    public function checkout(){

        return view('user.checkout');
    }

}
