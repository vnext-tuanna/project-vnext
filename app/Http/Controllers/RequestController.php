<?php

namespace App\Http\Controllers;

use App\Mail\RequestNotification;
use App\Models\Manager;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{

    public function index()
    {
        $requests = Requests::where('user_id', Auth::id())->paginate(10);
        $requests->load('manager');
        return view('client.request.index', compact('requests'));
    }
    public function create()
    {
        $typeRequests = [
            1 => 'In leave',
            2 => 'Leave Out',
            3 => 'Leave Early',
        ];
        $managers = Manager::where('division_id', Auth::user()->division_id)->first();
        return view('client.request.add', compact('managers', 'typeRequests'));
    }
    public function store(Request $request)
    {
        $managers = Manager::where('division_id', Auth::user()->division_id)->first();
        $modal = new Requests();
        $data = [
            'type' => (int)$request->type,
            'user_id' => Auth::id(),
            'manager_id' => (int)$request->manager_id,
            'content' => $request->content_request,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];
        $modal->fill($data)->save();
        Mail::to($managers->email)->send(new RequestNotification($data));
        return redirect(route('request'));
    }
    public function getRequestByWeek()
    {
        $getByWeek = [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()];
        $requests = Requests::where('user_id', Auth::id())
            ->whereBetween('created_at', $getByWeek)
            ->paginate(5);
        $requests->load('manager');
        return view('client.request.index', compact('requests'));
    }
    public function getRequestByMonth($month)
    {
        $requests = Requests::where('user_id', Auth::id())
            ->whereMonth('created_at', $month)
            ->paginate(5);
        $requests->load('manager');
        return view('client.request.index', compact('requests'));
    }
}
