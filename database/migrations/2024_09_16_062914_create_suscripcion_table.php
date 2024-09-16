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
        Schema::create('suscripcion', function (Blueprint $table) {
            $table->id('id_suscripcion');
            $table->integer('num_cursos');
            $table->string('nombre_suscripcion');
            $table->decimal('precio', 8, 2); 
            $table->integer('duracion_meses');
            $table->text('descripcion')->nullable();;
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suscripcion');
    }
};
