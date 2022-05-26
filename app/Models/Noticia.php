<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $table= 'noticias';
    protected $primaryKey='id_noticia';
    protected $fiable= [ 'titulo_noticia','resumen_noticias','fecha_noticias','foto_noticias','contenido_foto'];
    
}
