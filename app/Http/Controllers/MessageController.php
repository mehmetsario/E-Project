<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required|min:20'
        ]);
        $input=$request->all();
        Message::create($input);
        return Redirect::back()->with('msg','Message has been sent We will replay soon');
    }
    public function getMessage(){
        $data=Message::all();
        return view('admin.getMessage',['items'=>$data]);
    }
    public function messageDestroy($id){
        $data=Message::findorfail($id);
        $data->delete();
        return Redirect::back()->with('msg',"Message has been Deleted");
    }
}
