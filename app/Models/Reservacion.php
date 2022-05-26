<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'reservaciones';
    protected $primaryKey='id_reservacion';
    protected $fiable= [ 'id_laboratorio','id_docente','id_horario','nombres_practicasreservacion','descripcion_practicasreservacion','fecha_reservacion','numero_estudiantes'];
    

    public function r_docente(){
        return $this->belongsTo('App\Models\Docente','id_docente');
    }
    public function r_laboratorio(){
        return $this->belongsTo('App\Models\Laboratorio','id_laboratorio');
    }
    public function r_horario(){
        return $this->belongsTo('App\Models\Horario','id_horario');
    }

}
