<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table= 'redes_sociales';
    protected $primaryKey='id_redsocial';
    protected $fiable= [ 'url_redsocial','icono_redsocial'];
}
