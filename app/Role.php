<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // //What Permission associated to roles

    public function permissions(){
        return $this ->belongsToMany(Permission::class); 
    }

    public function givePermissionTo(Permission $permission){
        return $this ->permissions()->save($permission);
    } 
}


