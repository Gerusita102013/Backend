<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    public $timestamps=false;
    protected $table= 'usuarios';
    protected $primaryKey='id_usuario';
    protected $fiable= [ 'id_rol','id_carrera','nombres_usuario','apellidos_usuario','correo_usuario','cedula_usuario','clave_usuario','foto_usuario'];
    

    public function r_rol(){
        return $this->belongsTo('App\Models\Rol','id_rol');
    }
    public function r_carrera(){
        return $this->belongsTo('App\Models\Carrera','id_carrera');
    }
}
