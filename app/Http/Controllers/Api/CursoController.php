<?php

namespace App\Http\Controllers\Api;

use App\Models\Curso;
use App\Models\Alumno;
use App\Models\Asignatura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::all();
    }

    public function show($id)
    {
        return Curso::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Curso::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return $curso;
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return response()->json(['message' => 'Curso eliminado']);
    }

    public function testEjer3(string $id)
    {
        $curso = Curso::find($id);
        $curso->alumno();
        $curso->asignatura();
        return $curso;
    }
}
