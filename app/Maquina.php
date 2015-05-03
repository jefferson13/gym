<?php namespace Gym;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model {

    protected $table = 'maquinas';

    protected $fillable = ['nombre', 'descripcion', 'serie'];

}
