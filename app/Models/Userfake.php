<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    const ROLE = ['1' => 'Admin', '2' => 'Manager', '3' => 'Staff'];

    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'division_id',
        'position_id',
        'skill_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function requests()
    {
        return $this->hasMany(Request::class, 'user_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'user_id');
    }
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills', 'user_id', 'skill_id');
    }
    public function userskills()
    {
        // return $this->belongsToMany(UserSkill::class,'user_skills','user_id','skill_id');
        return $this->hasMany(UserSkill::class, 'user_id', 'id');
    }
}
