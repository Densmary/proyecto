<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mold
 *
 * @property $id
 * @property $amount
 * @property $size
 * @property $created_at
 * @property $updated_at
 *
 * @property Plantline[] $plantlines
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mold extends Model
{
    
    static $rules = [
		'amount' => 'required',
		'size' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['amount','size'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantlines()
    {
        return $this->hasMany('App\Plantline', 'id_molds', 'id');
    }
    

}
