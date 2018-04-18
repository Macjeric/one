<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Receive extends Model
{
     // Table Name
     protected $table = 'receives';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
 
     //Creating a relationship btn a post and a user(single post)
     public function user(){
         return $this->belongsTo('App\User');
     }
}
