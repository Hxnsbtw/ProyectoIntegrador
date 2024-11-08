<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    
    protected $fillable = ['razon_social', 'NIT', 'contacto'];
    //desactivar las marcas de tiempo
    public $timestamps=false;

    //relacion con activos: uno a muchos
    public function Activo(){
        return $this->hasMany(Activo::class,'id');
    }

}
