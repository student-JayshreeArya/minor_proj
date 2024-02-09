<?php

namespace App\Http\Controllers\auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
// use Illuminate\Facades\Support\Hash;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function showProfile($userId)
    {
        $user = User::findOrFail($userId);
        return view('profile', compact('user'));
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'age' => 'required|integer|min:0',
        'gender' => 'required|in:male,female',
        'mobile' => 'required|string|max:15',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        // 'profile_picture' => 'nullable|mimes:jpeg,png,jpg,gif|max:1000',
    ]);

    // if ($request->hasFile('profile_picture')) {
    //     $profilePicture = $request->file('profile_picture');
        
    //     $extension = $profilePicture->getClientOriginalExtension();
        
    //     $filename = 'profile_picture_' . time() . '.' . $extension;
        
    //      $profilePicturePath = $profilePicture->storeAs('profile_pictures', $filename, 'public'); // Adjust the storage path as per your needs
        
    // } else {
    //     $profilePicturePath = null;
    // }
    
    // Handle profile picture upload
    // if ($request->hasFile('profile_picture')) {
    //     $profilePicture = $request->file('profile_picture');
    //     // $profilePicturePath = $profilePicture->move(public_path('profile_pictures'),$profilePicture);
    //     $profilePicturePath = $profilePicture->store('profile_pictures', 'public'); // Adjust the storage path as per your needs
    // } else {
    //     $profilePicturePath = null;
    // }

    // Create a new user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'age' => $request->age,
        'gender' => $request->gender,
        'mobile' => $request->mobile,
        'city' => $request->city,
        'state' => $request->state,
        // 'profile_picture' => $profilePicturePath,
    ]);

    return redirect()->route('login')->withSuccess('Registration successful. Please log in.');
}
}