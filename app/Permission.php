<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //Which roles has the right to take a certain action

    public function roles(){
        return $this ->belongsToMany(Role::class); 
    }
}
