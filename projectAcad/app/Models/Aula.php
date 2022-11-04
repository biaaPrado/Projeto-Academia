<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    public function cadastros(){
        return $this->belongsToMany('App\Models\Cadastro');
    }

    protected $fillable = [
        'tipo',
        'dataAula',
        'contact',
    ];
}
