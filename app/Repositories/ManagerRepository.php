<?php

namespace App\Repositories;

use App\Models\Manager;

class ManagerRepository extends BaseRepository
{
    public function model(): string
    {
        return Manager::class;
    }
}
