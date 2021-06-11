<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocenos extends Model
{
    protected $table="conocenos";
    protected $primaryKey="idConocenos";
    public $timestamps=false;
    protected $fillable = [
        'tipo','descripcion','estado',
    ];
    public function unidad()
    {
        return $this->hasOne('App\Conocenos','tipo','idConoce');
    }
}