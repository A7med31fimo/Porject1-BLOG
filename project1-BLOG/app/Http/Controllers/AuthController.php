<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/posts')->withAlert(['success' => 'Registration successful. You are now logged in.']);
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/posts')->with('success', 'Login successful.');
        }
        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        
        return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
    public function editUserInfo()
    {
        $user = Auth::user();
        return view('auth.edit_user_info', ['user' => $user]);
    }
    public function updateUserInfo(Request $request, $user_id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user_id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        
        return redirect('/posts')->with('alert', ['success' => 'User information updated successfully.']);
    }
}
