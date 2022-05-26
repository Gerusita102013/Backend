<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table= 'horarios';
    protected $primaryKey='id_horario';
    protected $fiable= [ 'hora_inicio','hora_fin'];
    
}
