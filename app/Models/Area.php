<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $nombre_area
 * @property $created_at
 * @property $updated_at
 *
 * @property Lugare[] $lugares
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'nombre_area' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_area'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lugares()
    {
        return $this->hasMany('App\Models\Lugare', 'area_id', 'id');
    }
    

}
