<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {
    use HasFactory;
    protected $fillable = ['particular', 'nombre_profesor', 'precio'];

    public function alumnos() {
        return $this->hasMany(Alumno::class);
    }

    public function asignaturas() {
        return $this->belongsToMany(Asignatura::class, 'profesor_asignatura');
    }
}
