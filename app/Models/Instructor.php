<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table = 'instructores';
    
    protected $fillable = ['nombre', 'apeliido', 'identificacion', 'celular', 'correo', 'Especializacion'];
    //desactivar las marcas de tiempo
    public $timestamps=false;
}
