<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class AuthController extends Controller
{

    public function ShowRegister()
    {
        return view('Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required'
        ]);
   $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
        ]);

        return redirect('/logout');
    }
    public function ShowLoginForm()
    {
        return view('Auth.loginForm');
    }

    public function login(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($user)) {
            return redirect('/dashboard');
        }   return back()->with('loginError', 'Login Gagal!');
        // $user = User::create([
        //     'username' => $request->username,
        //     'password' => bcrypt($request->password),
        //     'role' => 'admin',
        //     'nama' => 'admin'
        // ]);

        // return redirect('/logout');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    public function changePasswordForm()
    {
        return view('Auth.ubah');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|confirmed'
        ]);

        if (Hash::check($request->oldPassword, auth()->user()->password)) {
            $user = User::where('id', auth()->user()->id)->first();
            $user->update([
                'password' => bcrypt($request->newPassword)
            ]);

            return redirect('/dashboard');
        }

        return back();
    }

    public function pengaturan()
    {
        return view('Auth.pengaturan');
    }


    public function changeName(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        $user->update([
            'nama' => $request->nama
        ]);
        return redirect('/dashboard');
    }


}
