<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public function users(){
        return  $this->belongsTo('App\User');

    }
}
