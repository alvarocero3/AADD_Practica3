<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Alumno::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return $alumno;
    }

    public function destroy($id)
    {
        Alumno::destroy($id);
        return response()->json(['message' => 'Alumno eliminado']);
    }

    public function testEjer1(string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->profesor();
        $alumno->cursos();
        return $alumno;
    }
}
