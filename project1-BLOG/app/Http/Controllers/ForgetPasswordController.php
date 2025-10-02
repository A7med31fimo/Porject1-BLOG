<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class ForgetPasswordController extends Controller
{
    // إرسال لينك الريسيت
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        // ابعت ايميل
        Mail::send('emails.password-reset', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Your Password');
        });

        return redirect()->route('email.reset', ['token' => $token]);
    }

    // تغيير الباسورد
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required'
        ]);

        $reset = DB::table('password_resets')->where([
            ['email', $request->email],
            ['token', $request->token]
        ])->first();

        if (!$reset) {
            return back()->withErrors(['email' => 'Invalid token!']);
        }

        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been reset!');
    }
}
