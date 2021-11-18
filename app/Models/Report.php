<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'reports';
    // CLIENT

    public $fillable = ['description', 'user_id', 'title'];
    // // =======

    //admin
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function manager()
    {
        return $this->belongsTo(Manager::class)->withTrashed();
    }
    // >>>>>>> develop
}
