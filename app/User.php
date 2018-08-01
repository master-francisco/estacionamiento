<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','surname','password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
// relaciones con los modelos desde el modelo usuario 
    public function personalInformacion(){
        return $this->belongsTo('App\PersonalInformation');
    }
    public function code(){
        return $this->belongsTo('App\Code');
    }
    public function vehicle(){
        return $this->hasOne('App\Vehicle');
    }
    public function space(){
        return $this->hasOne('App\Space');
    }
    public function apartado(){
        return $this->hasOne('App\Apartado');
    }
}
