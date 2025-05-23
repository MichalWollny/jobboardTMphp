<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id(); 
            // Optional: could also use composite keys instead of this

            $table->unsignedBigInteger('user_id'); // FK to users table
            $table->unsignedBigInteger('job_id');  // FK to jobs table

            $table->timestamp('application_date')->nullable();
            $table->string('status')->nullable();

            $table->timestamp('created_date')->nullable();
            $table->timestamp('last_update')->nullable();

            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
