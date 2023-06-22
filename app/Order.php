<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $required_quantity
 * @property $date
 * @property $id_clients
 * @property $id_departures
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Departure $departure
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'required_quantity' => 'required',
		'date' => 'required',
		'id_clients' => 'required',
		'id_departures' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['required_quantity','date','id_clients','id_departures'];


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
    public function departure()
    {
        return $this->hasOne('App\Departure', 'id', 'id_departures');
    }
    

}
