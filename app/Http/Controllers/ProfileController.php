<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use URL;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'age' => 'required|integer|min:0',
            'gender' => 'required|in:male,female',
            'mobile' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ]);

        $user->update($validatedData);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
    // public function profile()
    // {
    //     // echo URL::to('/app/storage/app/public/profile_pictures/1706723307.jpg');die;
    //     $user = auth()->user(); // Assuming the user is authenticated
    //     return view('profile.show', compact('user'));
    // }

    // public function edit()
    // {
    //     $user = Auth::user();
    //     return view('profile.edit', compact('user'));
    // }
    
    // public function update(Request $request)
    // {
    //     $user = auth()->user();

    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:users,email,'.$user->id,
    //         'age' => 'required|integer|min:0',
    //         'gender' => 'required|in:male,female',
    //         'mobile' => 'required|string|max:15',
    //         'city' => 'required|string|max:255',
    //         'state' => 'required|string|max:255',
    //         // 'profile_picture' => 'nullable|mimes:jpeg,png,jpg,gif|max:1000',
    //     ]);

    //     $user->update($request->all());

    //     return redirect()->route('profile.show')->withSuccess('Profile updated successfully.');
    // }
}



