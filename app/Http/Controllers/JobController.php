<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = [
            ['id' => 1, 'title' => 'PHP Developer', 'company' => 'TechCorp'],
            ['id' => 2, 'title' => 'Backend Engineer', 'company' => 'CodeFactory'],
            ['id' => 3, 'title' => 'Junior Laravel Dev', 'company' => 'DevStudio'],
        ];

        return view('jobs.index', ['jobs' => $jobs]);
    }
}
