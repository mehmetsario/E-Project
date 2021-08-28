<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Order::all();
        return view('admin.viewOrders',['orders'=>$data]);
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * get orders and query for best 10 users do shopping according to total paid money
     */
    public function getOrders(){
        $data=DB::table('orders')
            ->selectraw('name,SUM(orders.total_price) As total_price')
            ->groupBy('name')
            ->orderBy("total_price",'DESC')
            ->paginate(10);

        return view('admin.bestUsers',['orders'=>$data]);
    }

    /**
     * Query for best 10 product that was sold in site
     */
    public function getProductSale(){
        $data=Product::query()->where('total_sale','<>','0')->orderBy('total_sale','DESC')
            ->paginate(10);

        return view('admin.bestProduct',['total_sale'=>$data]);
    }

    /**
     * Place order :
     */
    public function placeOrder(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required|min:8|max:11',
            'wphone'=>'required|min:8|max:11',
            'dateOfBirth'=>'required',
            'gender'=>'required',
            'total_price'=>'required',
        ]);

        foreach ($request->cartItems as $cartItems){
            $data=Product::findorfail($cartItems);
            $data->total_sale+=1;
            $data->save();
        }
        $input=$request->all();
        Order::create($input);
        session()->forget('cart');

        return Redirect::route('product.index')->with('success','Order was Placed');
    }
}
