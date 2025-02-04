<?php

namespace App\Http\Controllers\Api;

use App\Models\Profesor;
use App\Models\Asignatura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesorController extends Controller {
    
    public function index() {
        return Profesor::with('asignaturas')->get();
    }

    public function show($id) {
        $profesor = Profesor::with('asignaturas')->find($id);
        return $profesor;
    }

    public function store(Request $request) {
        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function update(Request $request, $id) {
        $profesor = Profesor::find($id);
        $profesor->update($request->all());
        return response()->json($profesor, 200);
    }

    public function destroy($id) {
        $profesor = Profesor::find($id);
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