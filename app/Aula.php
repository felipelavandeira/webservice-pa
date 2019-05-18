<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schedule', 'matter', 'description'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
}
