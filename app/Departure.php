<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departure
 *
 * @property $id
 * @property $n_units
 * @property $manufacturing_order
 * @property $production_cost
 * @property $id_orders
 * @property $id_plantlines
 * @property $id_products
 *
 * @property Plantline $plantline
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departure extends Model
{
    
    static $rules = [
		'n_units' => 'required',
		'manufacturing_order' => 'required',
		'production_cost' => 'required',
		'id_orders' => 'required',
		'id_plantlines' => 'required',
		'id_products' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['n_units','manufacturing_order','production_cost','id_orders','id_plantlines','id_products'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function plantline()
    {
        return $this->hasOne('App\Plantline', 'id', 'id_plantlines');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'id_products');
    }
    

}
