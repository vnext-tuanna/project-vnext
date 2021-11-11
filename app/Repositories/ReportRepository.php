<?php

namespace App\Repositories;

use App\Models\Report;

class ReportRepository extends BaseRepository
{
    public function model(): string
    {
        return Report::class;
    }
}
