<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = [
        'nombre',
        'mail_contacto',
        'razon_social',
        'cuit'
    ];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class , 'cliente_id');
    }
}
