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
}
