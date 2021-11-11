<?php

namespace App\Services;

use App\Repositories\PositionRepository;
use Illuminate\Database\Eloquent\Collection;

class PositionService extends BaseService
{
    private $positionRepository;

    public function __construct(PositionRepository $positionRepository)
    {
        $this->positionRepository = $positionRepository;
    }

    /**
     * Get all users
     *
     * @return Collection
     */
    public function getAllPositions(): Collection
    {
        return $this->positionRepository->all();
    }
    public function store($id)
    {
        return $this->positionRepository->create($id);
    }
    public function getPositionsById($id)
    {
        return $this->positionRepository->find($id);
    }
    public function update($data, $id)
    {
        $positions = $this->positionRepository->find($id);
        return $positions->update($data);
    }
    public function delete($id)
    {
        return $this->positionRepository->delete($id);
    }
}
