<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
    ];

    public function users(){
        return $this->hasOne('App\User');
    }
}
