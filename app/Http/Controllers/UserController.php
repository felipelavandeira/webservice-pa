<?php

namespace App\Http\Controllers;

use App\Aula;
use App\Curso;
use App\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;

class UserController extends Controller
{

    public $successStatus = 200;

    public function login(){
        $userID = request('ra');
        $aluno = User::where('id', $userID)->get()->first();
        if(Auth::attempt(['email' => $aluno->email, 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            return response()->json(['success' => $success], $this-> successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this-> successStatus);
    }

    public function list() // todos alunos
    {
        $alunos = User::all();

        return response()->json($alunos);
    }

    public function show($id)//busca informações do aluno e curso
    {

        $aluno = User::with('curso')->find($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($aluno);

    }

    public function faltas($id) // faltas
    {
        $aluno = User::find($id);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $faltas = Curso::find($aluno);
        $disciplinas = Disciplina::find($faltas);

        return response()->json(compact('aluno', 'faltas', 'disciplinas'));
    }

    public function dia($id, $date)
    {
        $aluno = User::find($id);
        $aula = Aula::find($date);

        if(!$aluno) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json(compact('aluno', 'aula'));
    }
}
