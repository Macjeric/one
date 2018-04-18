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
        'name', 'email', 'password', 'department',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Relationship- that a user has many posts one-to-many relation
    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function receives(){
        return $this->hasMany('App\Receive');
    }

    public function notifies(){
        return $this->hasMany('App\Ordernotify');
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

// public function department(){
//         return $this->belongsTo('App\Receive', 'department');
//     }

//     public function departmentp(){
//         return $this->belongsTo('App\Post', 'department');
//     }

        // $user->hasRole('managerstores')
        //find the user that corresponds with the name column in role table
    public function hasRole($role){

        if(is_string($role)){
        return $this->roles->contains('name', $role);
    }


    return !! $role->intersect($this->roles)->count();

     //$user->hasRole('$collection')
    //  foreach ($role as $r){
    //      if ($this->hasRole($r->$name)){
    //          return true;
    //      }
    //  }
    //  return false;
    }

}


