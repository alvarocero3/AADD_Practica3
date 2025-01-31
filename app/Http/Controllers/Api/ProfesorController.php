<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesorController extends Controller {
    
    public function index() {
        return Profesor::with('asignaturas')->get();
    }

    public function show(Profesor $profesor) {
        return $profesor->load('asignaturas');
    }

    public function store(Request $request) {
        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function update(Request $request, Profesor $profesor) {
        $profesor->update($request->all());
        return response()->json($profesor, 200);
    }

    public function destroy(Profesor $profesor) {
        $profesor->delete();
        return response()->json(null, 204);
    }

    // Asignar asignatura a profesor
    public function attachAsignatura(Profesor $profesor, Asignatura $asignatura) {
        $profesor->asignaturas()->attach($asignatura);
        return response()->json(['message' => 'Asignatura asignada correctamente'], 200);
    }

    // Desasignar asignatura de profesor
    public function detachAsignatura(Profesor $profesor, Asignatura $asignatura) {
        $profesor->asignaturas()->detach($asignatura);
        return response()->json(['message' => 'Asignatura eliminada correctamente'], 200);
    }
}