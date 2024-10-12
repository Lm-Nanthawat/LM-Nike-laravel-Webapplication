<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.email');
    }

    public function sendResetLinkEmail(Request $request)
{
    $request->validate(['email' => 'required|email']);
    
    // ค้นหาผู้ใช้
    $user = \App\Models\User::where('email', $request->email)->first();

    if ($user) {
        // สร้าง token สำหรับการรีเซ็ตรหัสผ่าน
        $token = app('auth.password.broker')->createToken($user);
        // สร้าง URL สำหรับการรีเซ็ตรหัสผ่าน
        $url = url(route('password.reset', [
            'token' => $token,
            'email' => $request->email,
        ], false));

        // ส่งอีเมล
        Mail::to($request->email)->send(new ResetPasswordMail($url));

        return back()->with('status', __('A reset link has been sent to your email.'));
    }

    // หากไม่พบผู้ใช้
    return back()->withErrors(['email' => __('We can\'t find a user with that email address.')]);
}
}

