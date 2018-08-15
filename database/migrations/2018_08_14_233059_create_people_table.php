<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('nationality_id')->unsigned();
            $table->integer('biophoto_id')->unsigned();

            $table->string('nombre', 180);
            $table->string('apellido', 180);
            $table->string('dni', 8);
            $table->string('direccion', 180);
            $table->string('celular', 11);
            $table->string('correo', 180);
            $table->string('rol', 180);

            $table->timestamps();


            $table->foreign('nationality_id')->references('id')->on('nationalities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('biophoto_id')->references('id')->on('biophotos')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
