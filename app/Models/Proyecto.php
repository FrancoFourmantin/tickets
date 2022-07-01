<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = "proyectos";

    protected $fillable = [
        'cliente_id',
        'nombre',
        'descripcion'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class , 'cliente_id');
    }
}
