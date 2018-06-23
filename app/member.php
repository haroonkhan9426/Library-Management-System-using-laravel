<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public function thesis(){
      return $this->belongsToMany('App\thesis');
    }
}
