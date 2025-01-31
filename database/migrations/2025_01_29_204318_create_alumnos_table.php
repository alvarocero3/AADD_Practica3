<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profesor_id');
            $table->string('nombre_alumno');
            $table->string('apellido_alumno');
            $table->integer('edad_alumno');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('alumnos');
    }
};