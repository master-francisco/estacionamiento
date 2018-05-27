<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpacesInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spaces_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hora_entrada')->nullable();
            $table->string('hora_salida')->nullable();
            $table->string('tiempo')->default('10 min');
            $table->string('status')->default('disponible');
            $table->integer('space_id')->unsigned()->index();
            $table->foreign('space_id')
            ->references('id')
            ->on('spaces')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spaces_information');
    }
}
