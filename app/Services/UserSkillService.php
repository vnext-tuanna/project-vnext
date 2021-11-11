<?php

namespace App\Services;

use App\Repositories\UserSkillRepository;
use Illuminate\Database\Eloquent\Collection;

class UserSkillService extends BaseService
{
    private $userskillRepository;

    public function __construct(UserSkillRepository $userskillRepository)
    {
        $this->userskillRepository = $userskillRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllSkillUser($id)
    {
        return $this->userskillRepository->where('user_id', $id)->get();
    }
}
