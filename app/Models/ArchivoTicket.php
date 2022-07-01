<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoTicket extends Model
{
    use HasFactory;

    protected $table = 'archivos_tickets';

    protected $fillable = [
        'ruta' ,
        'ticket_id'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class , 'ticket_id');
    }
}
