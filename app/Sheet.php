<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sheet
 *
 * @property $id
 * @property $calibre
 * @property $thicknesses
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sheet extends Model
{
    
    static $rules = [
		'calibre' => 'required',
		'thicknesses' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['calibre','thicknesses'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'id_sheets', 'id');
    }
    

}
