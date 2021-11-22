<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreUserRequest;
use App\Services\DivisionService;
use App\Services\PositionService;
use App\Services\SkillService;
use App\Services\ManagerService;
use App\Services\UserService;
use App\Services\UserSkillService;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    private $managerService;
    private $divisionService;
    private $positionService;
    private $skillService;
    private $userskillService;
    private $userService;
    public function __construct(DivisionService $divisionService, ManagerService $managerService, PositionService $positionService, SkillService $skillService, UserSkillService $userskillService, UserService $userService)
    {
        $this->divisionService = $divisionService;
        $this->managerService = $managerService;
        $this->positionService = $positionService;
        $this->skillService = $skillService;
        $this->userskillService = $userskillService;
        $this->userService = $userService;
        $this->middleware('check.admin')->only('create', 'edit', 'destroy');
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
    public function update(StoreUserRequest $request, $id)
    {
        $managerService = $this->managerService->getManagerServiceById($id);
        $data = $request->all();
        $data['email'] = $managerService->email;
        $data['position_id'] = $managerService->position_id;
        $data['division_id'] = $managerService->division_id;
        $data['password'] = $managerService->password;
        if ($request->role == 3) {
            $userService = $this->userService->storeUser($data);
            $userService->skills()->attach($request->skill);
            $this->managerService->destroy($id);
            return redirect('admin/managers');
        } else {
            $managerService->update($data);
            $managerService->skills()->sync($request->skill);
             return redirect('/admin/managers');
        }
    }
    public function destroy($id)
    {
        $this->managerService->delete($id);
        return redirect('admin/users');
    }
}
