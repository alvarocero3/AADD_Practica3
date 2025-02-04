<?php

namespace App\Http\Controllers\Api;

use App\Models\Asignatura;
use App\Models\Curso;
use App\Models\Profesor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all();
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Asignatura::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update($request->all());
        return $asignatura;
    }

    public function destroy($id)
    {
        Asignatuea::destroy($id);
        return response()->json(['message' => 'Asignatura eliminado']);
    }

    public function testEjer2(string $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->profesor();
        $asignatura->cursos();
        return $asignatura;
    }
}
