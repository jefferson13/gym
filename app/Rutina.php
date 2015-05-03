<?php namespace Gym;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model {

    protected $table = 'rutinas';

    protected $fillable = ['nombre', 'duracion','numero_series','regularidad','otros'];

}
