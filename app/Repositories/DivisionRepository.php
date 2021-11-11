<?php

namespace App\Repositories;

use App\Models\Division;

class DivisionRepository extends BaseRepository
{
    public function model(): string
    {
        return Division::class;
    }
}
