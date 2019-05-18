<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function list()
    {
        $aulas = Aula::all();
        return response()->json($aulas);
    }
}
