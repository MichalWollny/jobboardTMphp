<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = [
            ['id' => 1, 'name' => 'TechCorp', 'website' => 'https://techcorp.com'],
            ['id' => 2, 'name' => 'StartupX', 'website' => 'https://startupx.io'],
        ];

        return view('companies.index', ['companies' => $companies]);
    }

    public function json()
    {
        return response()->json(Company::with('user')->get());
    }
}
