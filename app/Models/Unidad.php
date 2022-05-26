<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table= 'unidades';
    protected $primaryKey='id_unidad';
    protected $fiable= [ 'id_carrera','id_redsocial','nombre_unidad','descripcion_unidad','logo_unidad'];
    

    public function r_unidad(){
        return $this->belongsTo('App\Models\Carrera','id_carrera');
    }
    public function r_redsocial(){
        return $this->belongsTo('App\Models\RedSocial','id_redsocial');
    }
}

