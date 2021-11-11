<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
// <<<<<<< feat/report

// //     public $fillable = [ 'description', 'user_id', 'title'];
// // =======
// //     public function user()
// //     {
// //         return $this->belongsTo(User::class)->withTrashed();
// //     }
// >>>>>>> develop
}
