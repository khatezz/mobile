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
        'username','password','code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teacher(){
        return $this->hasMany('App\Teacher');
    }

     public function quiz(){
        return $this->hasMany('App\Quiz','quiz_id');


    }

    public function addquiz(){
        return $this->hasMany('App\Multiple','setq_id');
    }

    public function addtrue(){
        return $this->hasMany('App\True','userId');
    }

    public function addidentify(){
        return $this->hasMany('App\Identify','quizId');
    }

     public function addannounce(){
        return $this->hasMany('App\Announcement','user_id');
    }

    public function user(){
        $user = User::where('fname' , 'lname')->get();

        return $user;
   }
}
