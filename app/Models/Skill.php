<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'skills';
    protected $fillable = ['name'];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills', 'user_id', 'skill_id');
    }
    public function userskill()
    {
        return $this->hasMany(UserSkill::class);
    }
}
