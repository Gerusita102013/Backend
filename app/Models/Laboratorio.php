<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratio extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'laboratorios';
    protected $primaryKey='id_laboratorio';
    protected $fiable= [ 'id_unidad','nombre_laboratorio','descripcion_laboratorio','foto_laboratorio'];
    

    public function r_unidad(){
        return $this->belongsTo('App\Models\Unidad','id_unidad');
    }
   
}
