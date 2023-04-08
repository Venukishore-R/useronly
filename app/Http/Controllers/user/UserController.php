<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function add(Request $request){
    	$request->validate([
    		'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
    	],
        [
            'email.exists'=>'This email is not exists in admins table'
        ]);

    	$client = new Client();

    	$client->name =  $request->name;
    	$client->email =  $request->email;
    	$client->password =  $request->password;

    	$save = $client->save();

    	if($save){
    		return redirect()->route('user.login');
    	}else{
    		return redirect()->back()->with('failure','Not Registered');
    	}
    }


    public function index(Request $request){

        $request->validate([
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
        ]);

        $clients = Client::all();
        return view('dashboard.user.home',['clients'=>$clients]);
    }

   
}
