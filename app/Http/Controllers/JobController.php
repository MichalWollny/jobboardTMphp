<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    // Returns Blade view (HTML)
    public function index()
    {
        $jobs = [
            ['id' => 1, 'title' => 'PHP Developer', 'company' => 'TechCorp'],
            ['id' => 2, 'title' => 'Backend Engineer', 'company' => 'CodeFactory'],
            ['id' => 3, 'title' => 'Junior Laravel Dev', 'company' => 'DevStudio'],
        ];

        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Returns real DB data as JSON
    public function json()
    {
        $jobs = Job::with(['company', 'category'])->get();
        return response()->json($jobs);
    }
}
