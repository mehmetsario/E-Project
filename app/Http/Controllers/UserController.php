<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function destroy($id){
        $data=User::findorfail($id);
        $data->delete();
        return Redirect::back()->with('msg',"Users has been Deleted");

    }

}
