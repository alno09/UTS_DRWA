<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name', 'age'];

    function course()
    {
        return $this->hasMany('App\Models\Courses', 'student_id');
    }
}
