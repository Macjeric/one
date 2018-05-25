<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Requisition extends Model
{
    //Table Name
    protected $table = 'requisitions';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    //Creating a relationship btn a post and a user(single post)
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
