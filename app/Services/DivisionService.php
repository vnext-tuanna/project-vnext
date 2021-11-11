<?php

namespace App\Services;

use App\Repositories\DivisionRepository;
use Illuminate\Database\Eloquent\Collection;

class DivisionService extends BaseService
{
    private $divisionRepository;

    public function __construct(DivisionRepository $divisionRepository)
    {
        $this->divisionRepository = $divisionRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllDivisions(): Collection
    {
        return $this->divisionRepository->all();
    }
    public function store($data)
    {
        return $this->divisionRepository->create($data);
    }
    public function getDivisionById($id)
    {
        return $this->divisionRepository->find($id);
    }
    public function edit($id)
    {
        return $this->divisionRepository->where('id', $id)->get();
    }
    public function update($id, $data)
    {
        $divisions = $this->divisionRepository->find($id);
        return $divisions->update($data);
    }
    public function delete($id)
    {
        return $this->divisionRepository->delete($id);
    }
}
