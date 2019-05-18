<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function list()
    {
        $professors = Professor::all();
        return response()->json($professors);
    }
}
