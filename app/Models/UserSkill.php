<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;
    protected $table = 'user_skills';
    public function user()
    {
        return $this->belongsToMany(User::class, 'user_skills', 'user_id', 'skill_id');
        // return $this->belongsToMany(User::class,'user_skills');
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class, 'user_skills', 'user_id', 'skill_id');
    }
    public function manager()
    {
        return $this->belongsToMany(Manager::class, 'user_skills', 'manager_id', 'skill_id');
        // return $this->belongsToMany(User::class,'user_skills');
    }
}
