<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveOnSiteController extends Controller
{
    public function goToCart(){
        return view('cart');
    }
    public function goToAdmin(){
        return view('admin.index');
    }
    public function goToContact(){
        return view('contact');
    }
    public function goToAbout(){
        return view('aboutUs');
    }

}
