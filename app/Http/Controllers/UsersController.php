<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Validator;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function signin(Request $request) {
        $dataLogin = array('users_email' => $request->email, 'password' => $request->password);
        if(Auth::attempt($dataLogin)) {
            //dd(Auth::user());
            return redirect('/');
        } else {
            return redirect('/signin')->with('error','Wrong username or password.');
        }
    }
    public function signup(Request $request) {
        $db = new User;
        $db->users_name = $request->name;
        $db->users_email = $request->email;
        $db->users_password = Hash::make($request->password);
        $db->users_role = "user";
        $db->save();
        return redirect('/signin')->with('regis','Registration success. Please login');
    }
    public function signout() {
        if(Auth::check()) {
    		Auth::logout();
    		return redirect('/');
    	} else {
    		return redirect('/');
    	}
    }
    public function updateProfile(Request $request) {
        $db = new User;
        $update = $db::where('users_email','=',Auth::user()->users_email)->first();
        $update->users_name = $request->name;
        $update->save();
        return redirect('/profile')->with('success','Profile has been changed');
    }
    public function resetPass(Request $request) {
        $msg = array(
            'newpass.min' => 'Minimum character for your password is 6',
            'confpass.same' => 'Your Password confirmation does not match. Please try again later'
        );
        $rules = array(
            'newpass' => 'min:6',
            'confpass' =>'same:newpass'
        );
        $validator = Validator::make($request->all(),$rules,$msg);
        if($validator->fails()) {
            return redirect('/profile')->with('error',$validator->errors()->first());
        } else {
            $db = new User;
            $update = $db::where('users_email','=',Auth::user()->users_email)->first();
            $update->users_password = Hash::make($request->newpass);
            $update->save();
            return redirect('/profile')->with('success','Your password has been changed');
        }
    }
}
