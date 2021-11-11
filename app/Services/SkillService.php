<?php

namespace App\Services;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Repositories\SkillRepository;
use Illuminate\Database\Eloquent\Collection;

class SkillService extends BaseService
{
    private $skillRepository;

    public function __construct(SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllSkills(): Collection
    {
        return $this->skillRepository->with('userskill')->all();
    }
    public function store($data)
    {
        return $this->skillRepository->create($data);
    }
    public function edit($id)
    {
        return $this->skillRepository->where('id', $id)->get();
    }
    public function update($id, $data)
    {
        $skills = $this->skillRepository->find($id);
        return $skills->update($data);
    }
    public function delete($id)
    {
        return $this->skillRepository->delete($id);
    }
}
