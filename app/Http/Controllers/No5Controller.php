<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;
use App\Models\Courses;
use App\Models\Students;

class No5Controller extends Controller
{
    public function getUserPost()
    {
        $user =  User::all();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menampilkan data',
            $user
        ], 200);
    }

    public function getStudent()
    {
        $student =  Students::all();
        return response()->json([
            'status' => true,
            'message' => 'Sukses menampilkan data',
            $student
        ], 200);
    }
}
