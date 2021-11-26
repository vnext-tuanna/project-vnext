<?php

namespace App\Http\Controllers\admin;

use App\Services\DivisionService;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $divisionService;
    public function __construct(DivisionService $divisionService)
    {
        $this->divisionService = $divisionService;
        $this->middleware('check.admin')->only('create', 'edit', 'destroy');
    }

    public function index()
    {
        $divisions = $this->divisionService->getAllDivisions();
        return view('admin.division.division', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->divisionService->store($request->all());
        smilify('success', 'Created Successfully!');
        return redirect('admin/divisions');
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
        $divisions = $this->divisionService->getDivisionById($id);
        return view('admin.division.edit', compact('divisions'));
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
        $this->divisionService->update($id, $request->all());
        return redirect('admin/divisions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->divisionService->delete($id);
        smilify('success', 'Deleted Successfully!');
        return redirect('admin/divisions');
    }
}
