<?php

namespace App\Repositories;

use App\Models\UserSkill;

class UserSkillRepository extends BaseRepository
{
    public function model(): string
    {
        return UserSkill::class;
    }
}
