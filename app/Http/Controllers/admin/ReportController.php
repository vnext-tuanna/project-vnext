<?php

namespace App\Http\Controllers\admin;

use App\Models\Report;
use App\Services\ReportService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $reportService;

    public function __construct(ReportService $reportService)
    {
        $this->reportService = $reportService;
        $this->middleware('check.admin')->only('destroy');
    }
    public function index()
    {
        $reports = $this->reportService->getAllReports();
        return view('admin.report.report', compact('reports'));
    }
    public function reportByMonth($month)
    {
        $reports = Report::whereMonth('created_at', $month)->get();
        return view('admin.report.report', compact('reports'));
    }
    public function reportByWeek()
    {
        $getByWeek = [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()];
        $reports = Report::whereBetween('created_at', $getByWeek)->get();
        return view('admin.report.report', compact('reports'));
    }
    public function reportByDate(Request $request)
    {
        $start = Carbon::parse($request->start);
        $end = Carbon::parse($request->end);
        $reports = Report::all()
            ->whereBetween('created_at', [$start, $end]);
        return view('admin.report.report', compact('reports'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $reports = $this->reportService->edit($id);
        // return view('admin.report.edit',compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // $this->reportService->store($id,$request->all());
        // return redirect('admin/report');
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
        $this->reportService->delete($id);
        return redirect('admin/reports');
    }
}
