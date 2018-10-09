<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vagas extends Model
{
    protected $table = 'vagas';
    public $timestamps = false;
    protected $fillable = array('tipo', 'titulo', 'remuneracao', 'endereco', 'local', 'descricao', 'nota', 'empresa', 'contato');
}
