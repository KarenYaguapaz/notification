<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReenvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reenvio', function (Blueprint $table) {
             $table->increments('id');//correo
             $table->string('title',100);//mismo titulo
             $table->text('description');//comentario de la notificacion
             $table->date('date');//fecha
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reenvio', function (Blueprint $table) {
            //
        });
    }
}
