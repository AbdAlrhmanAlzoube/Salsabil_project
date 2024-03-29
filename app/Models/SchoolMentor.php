<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolMentor extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
    'attendance_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the belongsTo relationship with Attendance model
    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

}
