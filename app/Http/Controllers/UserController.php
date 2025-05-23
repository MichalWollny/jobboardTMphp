<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    // Blade view with mock data
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Anna Admin', 'email' => 'anna@example.com', 'type' => 'recruiter'],
            ['id' => 2, 'name' => 'Job Seeker Joe', 'email' => 'joe@example.com', 'type' => 'job_seeker'],
        ];

        return view('users.index', ['users' => $users]);
    }

    // JSON with real data from DB
    public function json()
    {
        return response()->json(User::all());
    }

}
