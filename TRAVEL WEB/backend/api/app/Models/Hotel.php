<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Habitacion;


class Hotel extends Model
{
    protected $tabla = 'hoteles';

    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class); // Reservas
    }
}
