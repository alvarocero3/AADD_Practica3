<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->boolean('particular');
            $table->string('nombre_profesor');
            $table->integer('precio');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('profesors');
    }
};