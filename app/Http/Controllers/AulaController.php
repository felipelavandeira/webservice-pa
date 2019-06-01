<?php

namespace App\Http\Controllers;

use App\Aula;
use App\User;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function list()
    {
        $aulas = Aula::all();
        return response()->json($aulas);
    }

    public function listDay(Request $request)
    {
    	$disciplinas = array();
    	$aux = User::with('curso', 'curso.disciplinas')->find($request->aluno);
    	foreach ($aux->curso->disciplinas as $disciplina) {
    		array_push($disciplinas, $disciplina->id);
    	}
    	$aula = Aula::where('schedule', 'like', '%'.$request->data.'%')
    		->whereIn('disciplina_id', $disciplinas)
    		->get();
    	return response()->json($aula);
    }
}
