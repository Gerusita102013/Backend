<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionMaterial extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'condicion_materiales';
    protected $primaryKey='id_condicionmaterial';
    protected $fiable= [ 'descripcion_condicionmaterial','estado_condicionmaterial'];
    
}
