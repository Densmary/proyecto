<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 *
 * @property $id
 * @property $model
 * @property $n°_chasis
 * @property $disposition
 * @property $fuel_type
 * @property $transmission_type
 * @property $engine_type
 * @property $age_model
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Car extends Model
{
    
    static $rules = [
		'model' => 'required',
		'n°_chasis' => 'required',
		'disposition' => 'required',
		'fuel_type' => 'required',
		'transmission_type' => 'required',
		'engine_type' => 'required',
		'age_model' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['model','n°_chasis','disposition','fuel_type','transmission_type','engine_type','age_model'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'id_cars', 'id');
    }
    

}
