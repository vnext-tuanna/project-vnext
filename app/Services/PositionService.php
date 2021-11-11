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
}
