<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository extends BaseRepository
{
    public function model(): string
    {
        return Skill::class;
    }
}
