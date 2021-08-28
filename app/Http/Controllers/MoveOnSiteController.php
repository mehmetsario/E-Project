<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MoveOnSiteController extends Controller
{
    /**
     * Route to cart to view product that added to shopping cart
     */
    public function goToCart(){
        return view('cart');
    }

    /**
     * Route to admin Panal
     */
    public function goToContact(){
        return view('contact');
    }

    /**
     * Route to About Page
     */
    public function goToAbout(){
        return view('aboutUs');
    }
    /**
     * Navigate to shop page and get product by its categories
     */
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
    /**
     * Navigate to single Product page
     */

    public function singleProduct($id){
        $data=Product::findorfail($id);
        return view('singleProduct',['item'=>$data]);

    }

    /**
     * Navigate to check out page
     */
    public function checkOut(){
        if (Auth::check()){
            return view('checkout');
        }else {
            return view('auth.login');
        }
    }

    /**
     * search on website
     */

    public function search(Request $request){
        $key = trim($request->get('key'));
        $data=Product::query()->where('name','like',"%{$key}%")
            ->orWhere('description','like',"%{$key}%")->get();
        $data2=Category::all();
        return view('shop',['items'=>$data,'Category'=>$data2]);
    }

    /**
     * get Information and pass it to dashboard
     */
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

    /**
     * Create view to preview product to edit it in dashboard
     */
    public function viewProduct(){
        $data=Product::all();
        $data2=Category::all();
        return view('admin.UpdateProduct',['item'=>$data,'categories'=>$data2]);
    }
    /**
     * get Categories and pass it to view (AddProduct)
     */
    public function prepareToAddProduct(){
        $data=Category::all();
        return view('admin.AddProduct',['item'=>$data]);
    }

}
