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
    public function silfiyas() {
        return $this->hasMany('App\Silfiya');
    }
    public function mouchtarayats() {
         return $this->hasMany('App\Mouchtarayat');
    }
    public function mawades() {
         return $this->hasMany('App\Mawad');
    }
}
