<?php

namespace App\Http\Controllers\admin;

use App\Models\Division;
use App\Models\Position;
use App\Models\Report;
use App\Models\Requests;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getSum()
    {
        $reports = Report::get('id')->count();
        $requests = Requests::where('status', 1)->count();
        $divisions = Division::get('id')->count();
        $positions = Position::get('id')->count();
        return view('admin.home', compact('reports', 'requests', 'divisions', 'positions'));
    }
}
