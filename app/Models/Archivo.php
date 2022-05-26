<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'archivos';
    protected $primaryKey='id_archivo';
    protected $fiable= [ 'id_laboratorio','id_tipoarchivo','nombre_archivo','descripcion_archivo','archivo'];
    

    public function r_Tipoarchivos(){
        return $this->belongsTo('App\Models\TipoArchivo','id_tipoarchivo');
    }
    public function r_laboratorio(){
        return $this->belongsTo('App\Models\Laboratorio','id_laboratorio');
    }


}
