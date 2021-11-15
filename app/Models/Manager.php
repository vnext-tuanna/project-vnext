<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $table = 'managers';
    protected $fillable = [
        'name',
        'email',
        'image',
        'position_id',
        'division_id',
        'follow_id',
        'role',
        'google_id',
        'facebook_id',
        'password',
        'provider',
        'provider_id',
        'division_id',
        'position_id',
        'skill_id',
    ];
    public function requests()
    {
        return $this->hasMany(Request::class, 'manager_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'user_id')->withTrashed();
    }
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class)->withTrashed();
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills', 'manager_id', 'skill_id')
        ->withPivot('manager_id')->wherePivotNotNull('manager_id');
    }
    // public function managerskill()
    // {
    //     // return $this->belongsToMany(UserSkill::class,'user_skills','user_id','skill_id');
    //     return $this->belongsToMany(UserSkill::class, 'user_skills', 'manager_id', 'skill_id');
    // }
}
