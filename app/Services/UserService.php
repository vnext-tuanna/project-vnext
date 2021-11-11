<?php

namespace App\Services;

use App\Models\Request;
use App\Models\UserSkill;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService extends BaseService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllUsers(): Collection
    {
        return $this->userRepository->with('division', 'position', 'userskills')->get();
    }
    public function store($data)
    {
        return $this->userRepository->create($data);
    }
    public function edit($id)
    {
        return $this->userRepository->with('division', 'position', 'skills', 'userskills')->where('id', $id)->get();
    }
    public function update($id, $data)
    {
        $users = $this->userRepository->find($id);
        return $users->update($data);
    }
    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }

    public function getUserServiceById($id)
    {
        return $this->userRepository->with('division', 'position')->find($id);
    }
}
