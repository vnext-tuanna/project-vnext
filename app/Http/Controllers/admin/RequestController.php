<?php

namespace App\Http\Controllers\admin;

use App\Mail\SendMail;
use App\Services\RequestService;
use Illuminate\Http\Request;
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
        $requests = $this->requestService->getAllRequests();
        return view('admin.request.request', compact('requests'));
    }
    public function getWaitingRequest()
    {
        $wRequests = $this->requestService->getWaitingRequests();
        return view('admin.request.waiting_request', compact('wRequests'));
    }
    public function approveWRequest($id)
    {
        $request = $this->requestService->getRequestById($id);
        $email = $request->user->email;
        $sub = $request->type;
        $this->requestService->appprove($id);
        Mail::to($email)->send(new SendMail($request, $sub));
        return redirect('admin/waiting');
    }
    public function denyWRequest($id)
    {
        $this->requestService->deny($id);
        return redirect('admin/waiting');
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
