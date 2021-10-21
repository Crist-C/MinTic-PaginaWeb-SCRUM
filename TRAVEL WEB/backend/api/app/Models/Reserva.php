<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
//use App\Models\Cliente;
//use App\Models\Habitacion;

class Reserva extends Model
{
    public $timestamps = false;
    protected $table = 'reservas';
    protected $fillable = ['habitacion_id', 'fecha_inicio', 'fecha_fin', 'huespedes', 'doc_cliente'];
    

    public function cliente()
    {
        return $this->belongTo(Cliente::class);
    }

    public function habitacion()
    {
        return $this->belongTo(Habitacion::class);
    }

}
