<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisos extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table= 'permisos';
    protected $primaryKey='id_permisos';
    protected $fiable= [ 'id_unidad','id_rol'];
    

    public function r_unidad(){
        return $this->belongsTo('App\Models\Permiso','id_rol');
    }
    public function r_redsocial(){
        return $this->belongsTo('App\Models\Permiso','id_unidad');
    }
}
