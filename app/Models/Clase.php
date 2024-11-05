<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Instructor;

class Clase extends Model
{
    use HasFactory;
    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación con el modelo Instructor
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id');
    }
}
