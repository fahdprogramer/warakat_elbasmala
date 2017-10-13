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
        'name', 'email', 'password', 'role' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $table="users";
     public function cais()
    {
        return $this->hasMany('App/Cais');
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
