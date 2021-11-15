<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $fillable = ['name'];
    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function managers()
    {
        return $this->hasMany(Manager::class, 'position_id', 'id');
    }
}
