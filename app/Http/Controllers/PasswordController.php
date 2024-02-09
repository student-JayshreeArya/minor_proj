<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function changePassword(){
        return view('auth.password.change');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);
        
        $user = auth()->user();
        if(!Hash::check($request->current_password, $user->password)){
            return redirect()->back()->with('errors','The provided current password does not match your actual password');
        }
        
        $user->update([
            'password' => bcrypt($request->new_password)
        ]);
        
        // Logout the user after changing the password
        auth()->logout();
    
        return redirect()->route('login')->with('success','Password Changed Successfully');
    }
    
}
