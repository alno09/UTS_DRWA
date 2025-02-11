<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'user_id'];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
