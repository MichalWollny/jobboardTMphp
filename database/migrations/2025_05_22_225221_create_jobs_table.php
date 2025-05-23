<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // Primary key: BIGINT auto-increment
    
            // Foreign keys
            $table->unsignedBigInteger('company_id');  
            // Reference to companies table
            $table->unsignedBigInteger('category_id'); 
            // Reference to categories table
    
            // Main job fields
            $table->string('title');                  
            // VARCHAR(255)
            $table->text('description')->nullable();  
            // TEXT, optional
            $table->string('location')->nullable();   
            // VARCHAR(255), optional
            $table->string('salary_range')->nullable(); 
            // e.g. "€40k–€60k"
            $table->string('employment_type');        
            // e.g. "full-time", "part-time", "contract"
    
            // Timestamps
            $table->timestamp('application_deadline')->nullable(); 
            // Deadline to apply
            $table->timestamp('published_date')->nullable();       
            // When job was posted
            $table->timestamp('created_date')->nullable();
            // When job was created
            $table->timestamp('last_update')->nullable();
             // When job was last updated
    
            // Metadata
            $table->timestamps(); 
            // Laravel's created_at and updated_at

            // Foreign key constraints (commented out for now)
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
