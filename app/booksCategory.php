<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booksCategory extends Model
{
    public $timestamps = false;

    public function books(){
      return $this->hasMany('books');
    }
}
