<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeveridadTicket extends Model
{
    use HasFactory;

    protected $table = 'severidades_tickets';

    protected $fillable = [
        'nombre',
        'color'
    ];
}
