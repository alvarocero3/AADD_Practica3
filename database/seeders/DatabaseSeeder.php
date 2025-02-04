<?php
use Illuminate\Database\Seeder;
use App\Models\Profesor;
use App\Models\Asignatura;
use App\Models\Curso;
use App\Models\Alumno;
class DatabaseSeeder extends Seeder {
    public function run() {


        Profesor::insert([
            ['nombre_profesor' => 'Carlos López', 'particular' => true, 'precio' => 50],
            ['nombre_profesor' => 'María Pérez', 'particular' => false, 'precio' => 40],
            ['nombre_profesor   ' => 'Juan García', 'particular' => true, 'precio' => 60],
            ['nombre_profesor' => 'Ana Rodríguez', 'particular' => false, 'precio' => 35],
            ['nombre_profesor' => 'Luis Fernández', 'particular' => true, 'precio' => 55]
        ]);

        $profesores = Profesor::all();

        foreach ($profesores as $profesor) {
            Alumno::insert([
                ['nombre_alumno' => 'Pedro', 'apellido_alumno' => 'Gómez', 'edad_alumno' => 20, 'profesor_id' => $profesor->id],
                ['nombre_alumno' => 'Laura', 'apellido_alumno' => 'Martínez', 'edad_alumno' => 22, 'profesor_id' => $profesor->id],
                ['nombre_alumno' => 'Andrés', 'apellido_alumno' => 'Díaz', 'edad_alumno' => 19, 'profesor_id' => $profesor->id]
            ]);
        }

        Asignatura::insert([
            ['nombre_asignatura' => 'Matemáticas', 'hora_inicio' => '08:00', 'hora_fin' => '10:00'],
            ['nombre_asignatura' => 'Historia', 'hora_inicio' => '10:30', 'hora_fin' => '12:00'],
            ['nombre_asignatura' => 'Física', 'hora_inicio' => '12:30', 'hora_fin' => '14:00'],
            ['nombre_asignatura' => 'Química', 'hora_inicio' => '14:30', 'hora_fin' => '16:00'],
            ['nombre_asignatura' => 'Inglés', 'hora_inicio' => '16:30', 'hora_fin' => '18:00']
        ]);

        $alumnos = Alumno::all();
        $asignaturas = Asignatura::all();

        foreach ($alumnos as $alumno) {
            Curso::insert([
                ['nombre_curso' => 'Curso A', 'alumno_id' => $alumno->id, 'asignatura_id' => $asignaturas->random()->id],
                ['nombre_curso' => 'Curso B', 'alumno_id' => $alumno->id, 'asignatura_id' => $asignaturas->random()->id]
            ]);
        }
    }
}
