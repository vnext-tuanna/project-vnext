<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Notifications\SendMailNotify;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class SendMailController extends Controller
{
    public function create()
    {
        return view('admin.emails.sendmail');
    }
    public function store(Request $request)
    {
        $users = User::all();
        $mailNoti = [
            'greeting' => 'Xin chào ',
            'title' => $request->title,
            'body' => strip_tags($request->content),
            'mailText' => 'Xem chi tiết tại đây',
            'url' => url($request->url),
            'footer' => 'Thanks you',
        ];
        Notification::send($users, new SendMailNotify($mailNoti));
        return redirect()->back()->with('message', 'Send Email Success');
    }
}
