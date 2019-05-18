<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
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

    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class, 'disciplina_professor');
    }
}
