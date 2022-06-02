<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugare
 *
 * @property $id
 * @property $numero
 * @property $area_id
 * @property $estado_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Estado $estado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugare extends Model
{
    
    static $rules = [
		'numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','area_id','estado_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    

}
