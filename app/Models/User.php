<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Overtrue\LaravelFollow\Followable;

class User extends Authenticatable
{

    const ROLE = ['1' => 'Admin', '2' => 'Manager', '3' => 'Staff'];

    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'image',
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
        return $this->hasMany(Requests::class, 'user_id', 'id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'user_id')->withTrashed();
    }
    public function division()
    {
        return $this->belongsTo(Division::class, 'user_id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class)->withTrashed();
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills', 'user_id', 'skill_id')->withTrashed();
    }
    public function userskills()
    {
        // return $this->belongsToMany(UserSkill::class,'user_skills','user_id','skill_id');
        return $this->belongsToMany(UserSkill::class, 'user_id', 'id');
    }
}
