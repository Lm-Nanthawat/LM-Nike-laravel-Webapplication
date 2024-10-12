<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    // กำหนดเส้นทางที่ผู้ใช้จะถูกส่งหลังจากรีเซ็ตรหัสผ่าน
    protected $redirectTo = '/home';

    // แสดงฟอร์มรีเซ็ตรหัสผ่าน
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.resetpassword')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    // ฟังก์ชันเพิ่มเติมสำหรับการรีเซ็ตรหัสผ่าน (จะสร้างในขั้นตอนถัดไป)
    public function reset(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'email' => 'required|email',
        'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
        'token' => 'required',
    ]);

    // Attempt to reset the password
    $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
        // Update the user's password
        $user->forceFill(['password' => bcrypt($password)])->save();
    });

    // Check if the password reset was successful
    if ($response == Password::PASSWORD_RESET) {
        // Redirect the user to the desired location with a success message
        return redirect('/')->with('status', __('Your password has been reset!'));
    }

    // If the password reset failed, redirect back with an error message
    return back()->withErrors(['email' => __($response)]);
}

}
