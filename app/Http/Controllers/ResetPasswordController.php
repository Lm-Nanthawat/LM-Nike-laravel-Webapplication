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

    
    $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
      
        $user->forceFill(['password' => bcrypt($password)])->save();
    });

   
    if ($response == Password::PASSWORD_RESET) {
      
        return redirect('/')->with('status', __('Your password has been reset!'));
    }

    
    return back()->withErrors(['email' => __($response)]);
}

}
