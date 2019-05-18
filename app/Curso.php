<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function alunos(){
        return $this->hasMany('App\User');
    }
    public function disciplinas(){
        return $this->hasMany('App\Disciplina');
    }
}
