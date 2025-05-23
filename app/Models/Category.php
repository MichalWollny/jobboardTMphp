<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // An Application belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // An Application belongs to one Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
}
