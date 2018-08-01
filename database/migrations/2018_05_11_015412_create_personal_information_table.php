<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*migracion de la tabla de personal información con relación con el usuario
        dependiendo del correo
        -crea tabla con atributos como string,integer entre otros
        -por comandos de consola se crean las migraciones a la BD
        */
        Schema::create('personal_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('career')->nullable();
            $table->string('grade')->nullable();
            $table->string('turn')->nullable();
            $table->string('number_phone')->nullable();
            $table->timestamps();
            $table->foreign('email')
            ->references('email')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }
    /**
     * @return void
     */
    /* Elimina la tabla con el nombre escrito en comillas si existe eso se 
    verifica con el atributo dropIfExists
    */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}
