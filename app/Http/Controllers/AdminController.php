<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminController extends Controller
{
    public function signin(Request $request) {
        $data = array('admin_username' => $request->username, 'password' => $request->password);
        if(Auth::guard('admin')->attempt($data)) {
            return redirect('/admin');
        } else {
            return redirect('/admin/signin')->with('error','Invalid username/password');
        }
    }
    public function signout() {
        if(Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    		return redirect('/');
    	} else {
    		return redirect('/');
    	}
    }
}
