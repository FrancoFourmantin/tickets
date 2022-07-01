<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'proyecto_id',
        'nombre',
        'descripcion',
        'estado_id',
        'severidad_id'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class , 'proyecto_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoTicket::class , 'estado_id');
    }

    public function severidad()
    {
        return $this->belongsTo(SeveridadTicket::class , 'severidad_id');
    }

    public function archivos()
    {
        return $this->hasMany(ArchivoTicket::class  , 'ticket_id');
    }
}
