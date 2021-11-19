<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function formLogin()
    {
        return view('client.login');
    }
    public function loginAdmin(Request $request)
    {
        $remember = $request->remember ? true : false;
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('manager')->attempt($credentials, $remember)) {
            return redirect('admin/dashboards');
        } else {
            return redirect()->back()->with('msg', 'You are not authorized to access');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('manager')->logout();
        return redirect()->route('admin.login');
    }
}
