<?php

namespace App\Http\Controllers\admin;

use App\Mail\SendMail;
use App\Models\Requests;
use App\Services\RequestService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $requestService;
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
        $this->middleware('check.manager')->only('getWaitingRequest');
    }
    public function index()
    {
        if (Auth::guard('manager')->user()->role == 2) {
            $count = count(Requests::where('status', 0)->where('manager_id', Auth::guard('manager')->id())->get());
            $requests = $this->requestService->getAllRequests();
            return view('admin.request.request', compact('requests', 'count'));
        } else {
            $requests = Requests::all()->where('status', 1);
            return view('admin.request.request', compact('requests'));
        }
    }
    public function getWaitingRequest()
    {
        $wRequests = $this->requestService->getWaitingRequests();
        return view('admin.request.waiting_request', compact('wRequests'));
    }
    public function approveWRequest($id)
    {
        $status = 1;
        $request = $this->requestService->getRequestById($id);
        $email = $request->user->email;
        $sub = $request->type == 1 ? 'In Leave' : ($request->type == 2 ? 'Leave Out' : 'Leave Early');
        $this->requestService->appprove($id);
        Mail::to($email)->queue(new SendMail($request, $sub, $status));
        return redirect('admin/waiting');
    }
    public function denyWRequest($id)
    {
        $status = 2;
        $request = $this->requestService->getRequestById($id);
        $email = $request->user->email;
        $sub = $request->type == 1 ? 'In Leave' : ($request->type == 2 ? 'Leave Out' : 'Leave Early');
        $this->requestService->deny($id);
        Mail::to($email)->queue(new SendMail($request, $sub, $status));
        return redirect('admin/waiting');
    }
    public function requestByMonth($month)
    {
        $count = count(Requests::where('status', 0)->where('manager_id', Auth::guard('manager')->id())->get());
        $requests = Requests::whereMonth('created_at', $month)
            ->where('manager_id', Auth::guard('manager')->id())
            ->where('status', 1)
            ->get();
        return view('admin.request.request', compact('requests', 'count'));
    }
    public function requestByDate(Request $request)
    {
        $count = count(Requests::where('status', 0)->where('manager_id', Auth::guard('manager')->id())->get());
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $requests = Requests::where('manager_id', Auth::guard('manager')->id())
            ->where('status', 1)
            ->whereBetween('created_at', [$start, $end])->get();
        return view('admin.request.request', compact('requests', 'count'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
