<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $code
 * @property $name
 * @property $description
 * @property $id_cars
 * @property $id_sheets
 * @property $created_at
 * @property $updated_at
 *
 * @property Car $car
 * @property Departure[] $departures
 * @property Sheet $sheet
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'code' => 'required',
		'name' => 'required',
		'description' => 'required',
		'id_cars' => 'required',
		'id_sheets' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code','name','description','id_cars','id_sheets'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function car()
    {
        return $this->hasOne('App\Car', 'id', 'id_cars');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departures()
    {
        return $this->hasMany('App\Departure', 'id_products', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sheet()
    {
        return $this->hasOne('App\Sheet', 'id', 'id_sheets');
    }
    

}
