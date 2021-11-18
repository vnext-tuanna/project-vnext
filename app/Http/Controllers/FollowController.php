<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        return view('client.user.index', compact('users'));
    }
}
