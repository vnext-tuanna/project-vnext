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

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect(route('index'));
        } else {
            return redirect()->back()->with('msg', 'Incorrect information');
        }
    }
}
