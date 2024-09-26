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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->string('image')->nullable(); 
            $table->string('title'); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 10, 2); 
            $table->foreignId('instructor_id')->nullable()->constrained('users', 'id')->onDelete('set null'); // Constrain a users
            $table->foreignId('category_id')->constrained('categories', 'id')->onDelete('cascade'); // Constrain a categories
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
