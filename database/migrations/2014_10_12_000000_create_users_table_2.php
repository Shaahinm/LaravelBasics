<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable2 extends Migration
{

    public function modify() 
    {
        Schema::table('users', function (Blueprint $table) {            
            if(!Schema::hasColumn('users', 'firstName')) { $table->string('firstName'); } 
            if(!Schema::hasColumn('users', 'lastName')) { $table->string('lastName'); }
            if(!Schema::hasColumn('users', 'username')) { $table->string('username'); }
            if(!Schema::hasColumn('users', 'birthdate')) { $table->string('birthdate'); }
         });  
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();                
            });
            $this->modify();
        } else {
            $this->modify();
        }
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
