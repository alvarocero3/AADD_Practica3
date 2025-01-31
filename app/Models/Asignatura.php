<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {
    use HasFactory;
    protected $fillable = ['nombre_asignatura', 'hora_inicio', 'hora_fin'];

    public function cursos() {
        return $this->hasMany(Curso::class);
    }

    public function profesores() {
        return $this->belongsToMany(Profesor::class, 'profesor_asignatura');
    }
}
