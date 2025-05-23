<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // A Job belongs to one Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // A Job belongs to one Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A Job has many Applications
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
    
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
}
