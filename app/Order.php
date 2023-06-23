<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $id_products
 * @property $required_quantity
 * @property $date
 * @property $id_clients
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'id_products' => 'required',
		'required_quantity' => 'required',
		'date' => 'required',
		'id_clients' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_products','required_quantity','date','id_clients'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Client', 'id', 'id_clients');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'id_products');
    }
    

}
