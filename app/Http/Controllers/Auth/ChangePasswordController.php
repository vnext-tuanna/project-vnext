<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change($id)
    {
        $user = Auth::user();
        return view('client.user.change-password', compact('user'));
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $userPassword = $user->password;
        $request->validate([
            'current' => 'required',
            'new' => 'required|same:confirm|min:6',
            'confirm' => 'required|min:6',
        ]);

        if (!Hash::check($request->current, $userPassword)) {
            return back()->withErrors(['current' => 'Password incorrect']);
        }

        $user->password = Hash::make($request->new);

        $user->save();
        return redirect()->back()->with('msg', 'Change password success');
    }
}
