<?php

namespace App\Repositories;

use App\Models\Requests;

class RequestRepository extends BaseRepository
{
    public function model(): string
    {
        return Requests::class;
    }
}
