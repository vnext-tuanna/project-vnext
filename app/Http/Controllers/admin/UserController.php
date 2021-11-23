<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreUserRequest;
use App\Mail\SendMail;
use App\Models\Requests;
use App\Services\DivisionService;
use App\Services\ManagerService;
use Illuminate\Support\Facades\Hash;
use App\Services\PositionService;
use App\Services\SkillService;
use App\Services\UserService;
use App\Services\UserSkillService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    private $userService;
    private $divisionService;
    private $positionService;
    private $skillService;
    private $userskillService;
    private $managerService;
    public function __construct(DivisionService $divisionService, UserService $userService, PositionService $positionService, SkillService $skillService, UserSkillService $userskillService, ManagerService $managerService)
    {
        $this->divisionService = $divisionService;
        $this->userService = $userService;
        $this->positionService = $positionService;
        $this->skillService = $skillService;
        $this->userskillService = $userskillService;
        $this->managerService = $managerService;
        $this->middleware('check.admin')->only('create', 'destroy');
    }

    public function index(Request $request)
    {
        $users = $this->userService->getAllUsers();
        return view('admin.user.user', compact('users'));
    }
    public function create()
    {
        $divisions = $this->divisionService->getAllDivisions();
        $positions = $this->positionService->getAllPositions();
        $skills = $this->skillService->getAllSkills();
        return view('admin.user.create', compact('divisions', 'positions', 'skills'));
    }
    public function store(StoreUserRequest $request)
    {
        $userInfo  = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'division_id' => $request->division,
            'position_id' => $request->position,
        ];
        if ($userInfo['role'] == 3) {
            $userService = $this->userService->storeUser($userInfo);
            $userService->skills()->attach($request->skill);
            return redirect('admin/users');
        } else {
            $managerService = $this->managerService->storeManager($userInfo);
            $managerService->skills()->attach($request->skill);
            return redirect('admin/managers');
        }
    }

    public function edit($id)
    {
        $divisions = $this->divisionService->getAllDivisions();
        $positions = $this->positionService->getAllPositions();
        $skills = $this->skillService->getAllSkills();
        $userskills = $this->userskillService->getAllSkillUser($id);
        $users = $this->userService->edit($id);
        $users = $users[0];
        return view('admin.user.edit', compact('users', 'divisions', 'positions', 'skills', 'userskills'));
    }
    public function update(StoreUserRequest $request, $id)
    {
        $userService = $this->userService->getUserServiceById($id);
        $data = $request->all();
        $data['email'] = $userService->email;
        $data['position_id'] = $request->position;
        $data['division_id'] = $request->division;
        $data['password'] = $userService->password;
        if ($request->role == 3) {
            $userService->update($data);
            $userService->skills()->sync($request->skill);

            return redirect('/admin/users');
        } else {
            $managerService = $this->managerService->storeManager($data);
            $managerService->skills()->attach($request->skill);
            $this->userService->delete($id);
            return redirect('admin/users');
        }
    }
    public function destroy($id)
    {
        $this->userService->delete($id);
        return redirect('admin/users');
    }
}
