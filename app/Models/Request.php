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
    protected $fillable = ['type', 'content', 'user_id', 'manager_id', 'start_date', 'end_date'];
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function manager()
    {
        return $this->belongsTo(Manager::class)->withTrashed();
    }
}
