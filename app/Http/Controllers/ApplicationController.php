<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = [
            ['id' => 1, 'user' => 'Joe Seeker', 'job' => 'PHP Developer', 'status' => 'pending'],
            ['id' => 2, 'user' => 'Jane Smith', 'job' => 'Backend Engineer', 'status' => 'reviewed'],
        ];

        return view('applications.index', ['applications' => $applications]);
    }

    public function json()
    {
        return response()->json(Application::with(['job', 'user'])->get());
    }
}
