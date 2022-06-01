<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table= 'docentes';
    protected $primaryKey='id_docente';
    protected $fiable= [ 'id_carrera','nombres_docente','apellidos_docente','correo_docente','clave_docente'];

    
    public function r_carrera(){
        return $this->belongsTo('App\Models\Carrera','id_carera');
       //return $this->belongsTo(Carrera::class,"id_carera");
    }
    
}
