<?php

namespace App\Http\Controllers;

use App\Nota;
use App\User;
use App\Falta;

use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function list($id)
    {
       	$faltas = User::with('notas', 'notas.disciplina', 'faltas')->find($id);


        if(!$faltas) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($faltas);
    }
}
