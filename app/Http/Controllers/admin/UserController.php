<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Services\DivisionService;
use App\Services\PositionService;
use App\Services\SkillService;
use App\Services\UserService;
use App\Services\UserSkillService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    private $divisionService;
    private $positionService;
    private $skillService;
    private $userskillService;
    public function __construct(DivisionService $divisionService, UserService $userService, PositionService $positionService, SkillService $skillService, UserSkillService $userskillService)
    {
        $this->divisionService = $divisionService;
        $this->userService = $userService;
        $this->positionService = $positionService;
        $this->skillService = $skillService;
        $this->userskillService = $userskillService;
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
    public function store(Request $request)
    {
        $password = Hash::make($request->password);
        $userService = $this->userService->store([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role' => $request->role,
            'division_id' => $request->division,
            'position_id' => $request->position,
        
        ]);
        $userService->skills()->attach($request->skill);
        return redirect('admin/users');
    }
    public function edit($id)
    {
        $test = $this->userService->getUserServiceById($id);
        $divisions = $this->divisionService->getAllDivisions();
        $positions = $this->positionService->getAllPositions();
        $skills = $this->skillService->getAllSkills();
        $userskills = $this->userskillService->getAllSkillUser($id);
        $users = $this->userService->edit($id);
        $users = $users[0];
        return view('admin.user.edit', compact('users', 'divisions', 'positions', 'skills', 'userskills', 'test'));
    }
    public function update(Request $request, $id)
    {
        $userService = $this->userService->getUserServiceById($id);
        $userService->update([
            'division_id' => $request->division,
            'position_id' => $request->position,
            'role' => $request->role,
        ]);
        $userService->skills()->sync($request->skill);
        return redirect('/admin/users');
    }
    public function destroy($id)
    {
        $this->userService->delete($id);
        return redirect('admin/users');
    }
}