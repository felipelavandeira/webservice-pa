<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function list()
    {
        $disciplinas = Disciplina::with('professors')->get();
        return response()->json($disciplinas);
    }

}
