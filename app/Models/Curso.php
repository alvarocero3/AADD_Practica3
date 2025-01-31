<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model {
    use HasFactory;
    protected $fillable = ['alumno_id', 'asignatura_id', 'nombre_curso'];

    public function alumno() {
        return $this->belongsTo(Alumno::class);
    }

    public function asignatura() {
        return $this->belongsTo(Asignatura::class);
    }
}
