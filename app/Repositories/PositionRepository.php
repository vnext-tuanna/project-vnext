<?php

namespace App\Repositories;

use App\Models\Position;

class PositionRepository extends BaseRepository
{
    public function model(): string
    {
        return Position::class;
    }
}
