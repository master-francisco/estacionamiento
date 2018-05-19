<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'marca', 'modelo','placas','color','año','user_id',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
