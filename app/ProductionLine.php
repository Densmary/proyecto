<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductionLine
 *
 * @property $id
 * @property $line
 * @property $cut_type
 * @property $speed
 * @property $id_molds
 * @property $created_at
 * @property $updated_at
 *
 * @property Departure[] $departures
 * @property Mold $mold
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProductionLine extends Model
{
    
    static $rules = [
		'line' => 'required',
		'cut_type' => 'required',
		'speed' => 'required',
		'id_molds' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['line','cut_type','speed','id_molds'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departures()
    {
        return $this->hasMany('App\Departure', 'id_productionLines', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mold()
    {
        return $this->hasOne('App\Mold', 'id', 'id_molds');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Record', 'id_productionLines', 'id');
    }
    

}
