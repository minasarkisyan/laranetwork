<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::user();

        return view('home', compact('users'));
    }

    public function update(Request $request)

    {
        $user = Auth::user();

//        $this->validate($request,[
//            'name' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:users,id,'.$user->id,
//        ]);
//
//        $user->name = $request->name;
//        $user->email = $request->email;
//
//        if($request->password){
//
//            $this->validate($request,[
//                'password' => 'min:6|confirmed',
//            ]);
//            $user->password = bcrypt($request->password);
//
//        }
//        if($request->hasFile('profileImg')){
//
//            $this->validate($request,[
//                'profileImg' =>  'mimes:png',
//
//            ]);
//
//            $profileName = $user->id.'_avatar'.time().'.'.request()->profile->getClientOriginalExtension();
//            $request->profile->storeAs('avatars',$profileName);
//
//            $user->profile = $profileName;
//        }
//
//        $user->save();

        return view('profile', ['user' => Auth::user()]);

    }
}
