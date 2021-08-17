<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();

        return view('home',['item'=>$data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    function addToCart(Product $productId){
        if(session()->has('cart')){
            $cart=new Cart(session()->get('cart'));

        }else{
            $cart= new Cart();
        }
        $cart->add($productId);
//        dd($cart);
        session()->put('cart',$cart);
//       dd(session()->get('cart')->items[1]);
        return Redirect::back()->with('success','Product was Added');

    }
    function destroyCart (Product $productId){
        $cart=new Cart(session()->get('cart'));
        $cart->remove($productId->id);
        if($cart->totalQty <=0){
            session()->forget('cart');
        }else{
            session()->put('cart',$cart);
        }
        return Redirect::back()->with('success','Product was removed');

    }
    function updateQty (Request $request,Product $productId){
//        dd($request);
        $request->validate([
            'qty'=>'required|numeric|min:1'
        ]);
        $cart=new Cart(session()->get('cart'));
        $cart->updateQty($productId->id,$request->qty);
//
        session()->put('cart',$cart);

        return Redirect::back()->with('success','Product was Updated');

    }
    public function shop()
    {
        $data=Product::all();
        $data2=Category::all();

        return view('shop',['items'=>$data,'Category'=>$data2]);
    }

}
