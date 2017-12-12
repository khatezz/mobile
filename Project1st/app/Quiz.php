<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    use Notifiable;
		

   public function multiple(){
        return $this->hasMany('App\Multiple', 'quiz_id');
    }

   
   
}
