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
    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function spaceInfo(){
        return $this->hasOne('App\SpaceInformation');
    }
}
