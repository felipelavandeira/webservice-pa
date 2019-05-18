<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Disciplina;
use App\User;
use App\Professsor;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function list()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    public function cronograma($id)
    {
        $curso = User::with('curso', 'curso.disciplinas', 'curso.disciplinas.aula','curso.disciplinas.professors')->find($id);

        if(!$curso) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($curso);
    }
}
