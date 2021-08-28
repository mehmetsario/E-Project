<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        $data=DB::table('products')->latest('created_at')->paginate(8);
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

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'details'=>'required',
            'price'=>'required|numeric',
            'category_id'=>'required',
            'isActive'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'assets/site/images/product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        Product::create($input);
        return Redirect::back()->with('msg','Product was successfuly Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'details'=>'required',
            'price'=>'required|numeric',
            'isActive'=>'required',
            'category_id'=>'required',

        ]);

        $data=Product::findorfail($id);
        $data->name=$request->name;
        $data->description=$request->description;
        $data->details=$request->details;
        $data->price=$request->price;
        $data->isActive=$request->isActive;
        $data->category_id=$request->category_id;

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/site/images/product/';
            if(File::exists(public_path($destinationPath.$data['image']))){
                File::delete($destinationPath.$data['image']);
            }
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = "$profileImage";
        }
        $data->save();
        return Redirect::back()->with('msg',"Product has been updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::findorfail($id);
        $data->delete();
        return Redirect::back()->with('msg',"Product has been deleted");

    }

    /**
     * Add product to shopping cart in session
     */
    function addToCart(Product $productId){
        if(session()->has('cart')){
            $cart=new Cart(session()->get('cart'));

        }else{
            $cart= new Cart();
        }
        $cart->add($productId);
        session()->put('cart',$cart);
        return Redirect::back()->with('success','Product was Added');

    }
    /**
     * Delete  product from shopping cart in session
     */
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
    /**
     * Update quantity of  product in shopping cart in session
     */
    function updateQty (Request $request,Product $productId){

        $request->validate([
            'qty'=>'required|numeric|min:1'
        ]);
        $cart=new Cart(session()->get('cart'));
        $cart->updateQty($productId->id,$request->qty);
        session()->put('cart',$cart);
        return Redirect::back()->with('success','Product was Updated');
    }
}
