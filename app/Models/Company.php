<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // A Company belongs to a User (the recruiter)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A Company has many Jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;
}
