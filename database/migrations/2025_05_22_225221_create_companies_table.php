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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            
            $table->string('name');
            $table->text('description')->nullable(); 
            $table->string('website')->nullable(); 
            $table->string('address')->nullable(); 

            $table->timestamp('created_date')->nullable();
            $table->timestamp('last_update')->nullable();

            $table->timestamps();

            // Foreign key constraints (commented out for now)
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
