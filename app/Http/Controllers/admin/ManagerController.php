<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Hash;
use App\Services\DivisionService;
use App\Services\PositionService;
use App\Services\SkillService;
use App\Services\ManagerService;
use App\Services\UserSkillService;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    private $managerService;
    private $divisionService;
    private $positionService;
    private $skillService;
    private $userskillService;
    public function __construct(DivisionService $divisionService, ManagerService $managerService, PositionService $positionService, SkillService $skillService, UserSkillService $userskillService)
    {
        $this->divisionService = $divisionService;
        $this->managerService = $managerService;
        $this->positionService = $positionService;
        $this->skillService = $skillService;
        $this->userskillService = $userskillService;
    }

    public function index(Request $request)
    {
        $managers = $this->managerService->getAllManager();
        return view('admin.manager.manager', compact('managers'));
    }

    public function edit($id)
    {
        $divisions = $this->divisionService->getAllDivisions();
        $positions = $this->positionService->getAllPositions();
        $skills = $this->skillService->getAllSkills();
        $managerskills = $this->userskillService->getAllSkillManager($id);
        $managers = $this->managerService->edit($id);
        $managers = $managers[0];
        return view('admin.manager.edit', compact('managers', 'divisions', 'positions', 'skills', 'managerskills'));
    }
    public function update(Request $request, $id)
    {
        $managerService = $this->managerService->getManagerServiceById($id);
        
        $managerService->update([
            'name' => $request->name,
            'division_id' => $request->division,
            'position_id' => $request->position,
            'role' => $request->role,
        ]);
        // dd($managerService->skills);
        $managerService->skills()->sync($request->skill);
        // dd($managerService);
        return redirect('/admin/managers');
    }
    public function destroy($id)
    {
        $this->managerService->delete($id);
        return redirect('admin/users');
    }
}
