<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArchivo extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'tipos_archivos';
    protected $primaryKey='id_tipoarchivo';
    protected $fiable= [ 'tipo_archivo'];
    
}
