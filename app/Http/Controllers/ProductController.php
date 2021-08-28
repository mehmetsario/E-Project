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
    public function shop($categoryID)
    {
        if ($categoryID==0){
            $data=Product::all();
            $data2=Category::all();
            return view('shop',['items'=>$data,'Category'=>$data2]);
        }
        $data=Product::all()->where('category_id', $categoryID);

        $data2=Category::all();
        return view('shop',['items'=>$data,'Category'=>$data2]);
    }
    public function viewProduct(){
        $data=Product::all();
        $data2=Category::all();
        return view('admin.UpdateProduct',['item'=>$data,'categories'=>$data2]);
    }
    public function passCategory(){
        $data=Category::all();
        return view('admin.AddProduct',['item'=>$data]);
    }
    public function singleProduct($id){
        $data=Product::findorfail($id);
        return view('singleProduct',['item'=>$data]);

    }
    public function checkOut(){
        if (Auth::check()){

            return view('checkout');
        }else {
            return view('auth.login');
        }
    }
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
    public function search(Request $request){
        $key = trim($request->get('key'));
        $data=Product::query()->where('name','like',"%{$key}%")
                              ->orWhere('description','like',"%{$key}%")->get();
        $data2=Category::all();
        return view('shop',['items'=>$data,'Category'=>$data2]);
    }
    public function getInformation (){
        $data=DB::table('products')->count();
        $data2=DB::table('categories')->count();
        $data3=DB::table('orders')->count();
        $data4= DB::table('orders')->sum('total_price');
        $data5=User::all();

        return view('admin.index',['item1'=>$data,
                                        'item2'=>$data2,
                                        'item3'=>$data3,
                                        'item4'=>$data4,
                                        'item5'=>$data5
        ]);
    }
}
