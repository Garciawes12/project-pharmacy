<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 *
 * @property $id
 * @property $fecha
 * @property $proveedor
 * @property $tipo_comprobante
 * @property $serie_comprobante
 * @property $numero_comprobante
 * @property $impuesto
 * @property $medicamento
 * @property $Cantidad
 * @property $precio_compra
 * @property $precio_venta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{

    static $rules = [
		'fecha' => 'required',
		'proveedor' => 'required',
		'tipo_comprobante' => 'required',
		'medicamento' => 'required',
		'Cantidad' => 'required',
		'precio_compra' => 'required',
		'precio_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','proveedor','tipo_comprobante','serie_comprobante','numero_comprobante','impuesto','medicamento','Cantidad','precio_compra','precio_venta'];





}
