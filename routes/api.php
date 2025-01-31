<?php

use App\Http\Controllers\Api\ProfesorController;
use App\Http\Controllers\Api\AlumnoController;
use App\Http\Controllers\Api\CursoController;
use App\Http\Controllers\Api\AsignaturaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('profesores', ProfesorController::class);
Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('cursos', CursoController::class);
Route::apiResource('asignaturas', AsignaturaController::class);

// Endpoints adicionales para manejar la relación muchos a muchos
Route::post('profesores/{profesor}/asignaturas/{asignatura}', [ProfesorController::class, 'attachAsignatura']);
Route::delete('profesores/{profesor}/asignaturas/{asignatura}', [ProfesorController::class, 'detachAsignatura']);