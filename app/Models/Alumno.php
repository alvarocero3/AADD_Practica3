<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {
    use HasFactory;
    protected $fillable = ['profesor_id', 'nombre_alumno', 'apellido_alumno', 'edad_alumno'];

    public function profesor() {
        return $this->belongsTo(Profesor::class);
    }

    public function cursos() {
        return $this->hasMany(Curso::class);
    }
}
