<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'requests';
    protected $fillable = ['status'];
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}