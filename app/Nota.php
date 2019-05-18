<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade', 'grade_sort'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
    public function aluno(){
        return $this->belongsTo('App\User');
    }
}
