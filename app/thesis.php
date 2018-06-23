<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thesis extends Model
{
    protected $table = 'thesis';
    public $timestamps = false;

    public function member(){
      return $this->belongsToMany('App\members');
    }
}
