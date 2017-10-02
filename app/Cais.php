<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cais extends Model
{
    //
      public $table="cais";
      
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
