<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use notificable;
class PersonalInformation extends Model
{
    protected $table = 'personal_information';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'career','grade','turn' ,'number_phone',
    ];
   

    public function user(){
        return $this->belongsTo('App\User');
    }
}
