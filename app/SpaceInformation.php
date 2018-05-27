<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceInformation extends Model
{
    protected $table = 'spaces_information';

    public function space(){
        return $this->belongsTo('App\Space');
    }
}
