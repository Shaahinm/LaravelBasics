<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramUsersTable extends Migration
{



public function modify()
{
    Schema::table('instagram_users', function (Blueprint $table) {
        // if(!Schema::hasColumn('instagram_users', 'birthdate')) { $table->string('birthdate'); }
    });
}

    public function up()
    {
        if (!Schema::hasTable('instagram_users')) {
            Schema::create('instagram_users', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('user_id');                
                $table->string('token');                
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users');
            });

            
            $this->modify();
        } else {
            $this->modify();
        }
    }
    public function down()
    {
        Schema::dropIfExists('instagram_users');
    }
}
