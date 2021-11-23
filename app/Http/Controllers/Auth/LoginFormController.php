<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginFormController extends Controller
{
    public function loginForm()
    {
        return view('client.login');
    }
    public function login(Request $request)
    {
        $remember = $request->remember;
        $acc = ['email' => $request->email, 'password' => $request->password];
        $userLogin = Auth::attempt($acc);
        if ($userLogin) {
            return redirect(route('index'));
        } elseif (Auth::guard('manager')->attempt($acc)) {
            return redirect(route('index'));
        } else {
            return redirect()->back()->with('msg', 'Email or password incorrect');
        }
        return $userLogin;
    }
}
