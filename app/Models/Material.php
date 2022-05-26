<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'materiales';
    protected $primaryKey='id_material';
    protected $fiable= [ 'id_laboratorio', 'id_condicionmaterial','nombre_laboratorio','descripcion_laboratorio','foto_laboratorio'];
    

    public function r_laboratorio(){
        return $this->belongsTo('App\Models\Laboratorio','id_laboratorio');
    }

    public function r_condicion_material(){
        return $this->belongsTo('App\Models\CondicionMaterial','id_condicionmaterial');
    }
}
