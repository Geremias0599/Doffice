<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function movimientos(){
        return $this->belongsToMany(Movimiento::class,'movimiento_producto','producto_id','movimiento_id')
                        ->withPivot('fecha', 'justificacion','cantidad')
                        ->withTimestamps();


    }



    //la siguiente linea de codigo es para que nos deje rellenar los campos especificados de la DB
    protected $fillable = ["nombreProducto","precioProducto","proveedor","unidadesEnExistencia","paisOrigen"];
}
