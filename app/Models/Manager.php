<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Manager extends Authenticatable
{
    use HasFactory,SoftDeletes;
    protected $guarded = 'manager';
    protected $table = 'managers';
    protected $fillable = [
        'name',
        'email',
        'image',
        'position_id',
        'division_id',
        'role',
        'password',
        'provider',
        'provider_id',
        'division_id',
        'position_id',
        'skill_id',
    ];
    public function requests()
    {
        return $this->hasMany(Requests::class, 'manager_id', 'id')->withTrashed();
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
//     public function managerskill()
//     {
//         // return $this->belongsToMany(UserSkill::class,'user_skills','user_id','skill_id');
//         return $this->belongsToMany(UserSkill::class, 'user_skills', 'manager_id', 'skill_id');
//     }
}
