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
        $result = User::with('curso', 
            'curso.disciplinas', 
            'notas', 
            'faltas')->find($id);
        if(!$result) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($result);
    }
}
