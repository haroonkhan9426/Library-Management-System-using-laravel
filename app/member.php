<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{

  protected $fillable = ['memName', 'email', 'contact', 'cnic', 'dept', 'address', 'memType', 'password'];

    public function thesis(){
      return $this->belongsToMany('App\thesis');
    }

    public function memStaff(){
      return $this->belongsTo('App\memStaff');
    }

    public function memStudent(){
      return $this->belongsTo('App\memStudent');
    }

    public function issuedBooks(){
      return $this->hasMany('App\booksIssued');
    }

    public function returnBooks(){
      return $this->hasMany('App\booksReturned');
    }
}
