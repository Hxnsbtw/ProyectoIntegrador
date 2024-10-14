<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    
    protected $fillable = ['nombre', 'apeliido', 'identificacion', 'correo', 'celular', 'peso', 'altura','fecha_ingreso'];
    //desactivar las marcas de tiempo
    public $timestamps=false;
}
