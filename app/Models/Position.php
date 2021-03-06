<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'positions';
    protected $fillable = ['name'];
    public function users()
    {
        return $this->hasMany(User::class, 'position_id', 'id');
    }
    public function managers()
    {
        return $this->hasMany(Manager::class, 'position_id', 'id');
    }
}
