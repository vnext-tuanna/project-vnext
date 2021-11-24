<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Manager;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::where('user_id', Auth::id())->get();
        return view('client.report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers = Manager::where('division_id', Auth::user()->division_id)->first();
        return view('client.report.add', compact('managers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReportRequest $request)
    {
        $request->validated();
        $modal = new Report();
        $data = [
          'user_id' => Auth::id(),
          'description' => $request->description,
          'title' => $request->title,
            'manager_id' => $request->manager_id,
        ];
        $modal->fill($data)->save();
        return redirect('report');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('client.report.detail', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);
        $managers = Manager::where('division_id', Auth::user()->division_id)->first();
        return view('client.report.update', compact('report', 'managers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportRequest $request, $id)
    {
        $request->validated();
        $modal = Report::find($id);
        $data = [
            'user_id' => Auth::id(),
            'description' => $request->description,
            'title' => $request->title,
            'manager_id' => $request->manager_id,
        ];
        $modal->fill($data)->save();
        return redirect('report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
