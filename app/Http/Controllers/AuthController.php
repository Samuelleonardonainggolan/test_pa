<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepalaSekolah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required|unique:kepala_sekolahs',
            'password' => 'required|confirmed'
        ])->validate();

        KepalaSekolah::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
        } catch (ValidationException $e) {
            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);
        }

        $credentials = $request->only('username', 'password');

        if (Auth::guard('kepala_sekolahs')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->route('homeAdmin');
        }

        throw ValidationException::withMessages([
            'username' => trans('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('kepala_sekolahs')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function profile()
    {
        return view('profile');
    }
}
