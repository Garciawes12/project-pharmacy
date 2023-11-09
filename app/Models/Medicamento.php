<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $id
 * @property $imagen
 * @property $nombre
 * @property $codigo
 * @property $categoria
 * @property $unidad_medida
 * @property $cantidad_stock
 * @property $fecha_caducidad
 * @property $precio_compra
 * @property $precio_venta
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
		'imagen' => 'required',
		'nombre' => 'required',
		'codigo' => 'required',
		'categoria' => 'required',
		'unidad_medida' => 'required',
		'cantidad_stock' => 'required',
		'fecha_caducidad' => 'required',
		'precio_compra' => 'required',
		'precio_venta' => 'required',
		'proveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombre','codigo','categoria','unidad_medida','cantidad_stock','fecha_caducidad','precio_compra','precio_venta','proveedor'];



}
