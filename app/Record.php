<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $departures_change
 * @property $breackdowns
 * @property $Incidents
 * @property $date
 * @property $plantlines
 * @property $id_operators
 * @property $created_at
 * @property $updated_at
 *
 * @property Operator $operator
 * @property Plantline $plantline
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'departures_change' => 'required',
		'breackdowns' => 'required',
		'Incidents' => 'required',
		'date' => 'required',
		'plantlines' => 'required',
		'id_operators' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departures_change','breackdowns','Incidents','date','plantlines','id_operators'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function operator()
    {
        return $this->hasOne('App\Operator', 'id', 'id_operators');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function plantline()
    {
        return $this->hasOne('App\Plantline', 'id', 'plantlines');
    }
    

}
