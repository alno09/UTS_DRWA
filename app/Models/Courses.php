<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = ['name', 'grade', 'student_id'];

    function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
