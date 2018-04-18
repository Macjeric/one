<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //The table which will hold roles of some users 
        Schema::create('roles', function(blueprint $table){
            $table ->increments('id');
            $table ->string('name');//Stores,Admin
            $table ->increments('label')->nullable();
            $table ->timestamps();

        });


        //The table which will hold permissions of some users 
        Schema::create('permissions', function(blueprint $table){
            $table ->increments('id');
            $table ->string('name');//Edit-something
            $table ->increments('label')->nullable();//Edit something
            $table ->timestamps;

        });
        
        //Joining tables through ids
        Schema::create('permission_role', function(blueprint $table){
            $table ->integer('permission_id')->unsignable(); 
            $table ->integer('role_id')->unsignable();


        //Foreign Constraints
        $table ->foreign('permission_id')
                ->references('id')
                ->on('permissions')
                ->onDelete('cascade');

        
        $table ->foreign('role_id')
                ->references('id')
                ->on('permissions')
                ->onDelete('cascade');

        $table ->primary(['permission_Id','role_id']);
                
        });


            //Relationship btn a user and a role table
            Schema::create('role_user', function(blueprint $table){
                $table ->integer('role_id')->unsignable();
                $table ->integer('user_id')->unsignable();
    
    
            //Foreign Constraints
            $table ->foreign('role_id')
                    ->references('id')
                    ->on('permissions')
                    ->onDelete('cascade');
    
            
             $table ->foreign('user_id')
                    ->references('id')
                    ->on('permissions')
                    ->onDelete('cascade');

            $table ->primary(['role_id','user_id']);
                    
            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
