<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'max_absence'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function curso(){
        return $this->belongsTo('App\Curso');
    }
    public function aula(){
        return $this->hasOne('App\Aula');
    }
    public function falta(){
        return $this->hasOne('App\Falta');
    }
    public function notas(){
        return $this->hasMany('App\Nota');
    }
    public function professors(){
        return $this->belongsToMany(Professor::class, 'disciplina_professor');
    }
}
