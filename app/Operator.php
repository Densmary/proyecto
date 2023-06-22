<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operator
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $sex
 * @property $identificacion_card
 * @property $age
 * @property $email
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Record[] $records
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operator extends Model
{
    
    static $rules = [
		'name' => 'required',
		'last_name' => 'required',
		'sex' => 'required',
		'identificacion_card' => 'required',
		'age' => 'required',
		'email' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','last_name','sex','identificacion_card','age','email','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function records()
    {
        return $this->hasMany('App\Record', 'id_operators', 'id');
    }
    

}
