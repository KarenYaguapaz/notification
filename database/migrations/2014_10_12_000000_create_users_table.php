<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('birth');
            $table->integer('phone')->unsigned();
            $table->string('jobtitle');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();//permite recordar a los usuarios en visitas subsiguientes 
            $table->timestamps();//maracas de tiempo
        });
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
