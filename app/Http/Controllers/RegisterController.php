<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;

class RegisterController extends Controller
{
    public function showStep1()
    {
        return view('registers.step1'); 
    }

    public function postStep1(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);
    
        $verificationCode = Str::random(6);
        $request->session()->put('verification_code', $verificationCode);
        $request->session()->put('email', $request->email);
        
        // ส่งอีเมลด้วย VerificationCodeMail
        Mail::to($request->email)->send(new VerificationCodeMail($verificationCode));
    
        return redirect()->route('registers.step2');
    }

    public function showStep2()
    {
        return view('registers.step2'); 
    }

    public function postStep2(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|in:' . $request->session()->get('verification_code'),
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ],
            'preference' => 'required|in:men,women',
            'date' => 'required|integer|min:1|max:31',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'checkbox1' => 'required',
            'checkbox2' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $request->session()->forget('verification_code');

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->session()->get('email'), 
            'password' => Hash::make($request->password), 
            'preference' => $request->preference,
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
            'checkbox1' => $request->has('checkbox1') ? 1 : 0,
            'checkbox2' => $request->has('checkbox2') ? 1 : 0,
        ]); 
        
        return redirect()->back()->with('success', 'Registration successful!');

    }
}

