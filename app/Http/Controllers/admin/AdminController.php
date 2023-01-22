<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;


class AdminController extends Controller
{
	
	public function index(Request $request){

        $request->validate([
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
        ]);

       $admins = Admin::all();
       return view('dashboard.admin.home',['admins'=>$admins]);
    }
}
