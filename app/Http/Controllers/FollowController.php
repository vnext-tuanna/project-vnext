<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->paginate(8);
        $user = User::find(Auth::id());
        $user::with('followings')->count();
        return view('client.user.index', compact('users', 'user'));
    }
    public function follow(Request $request)
    {
        $user = User::find(Auth::id());
        $users = User::find($request->id);
        $user->toggleFollow($users);
        return redirect()->back();
    }
}
