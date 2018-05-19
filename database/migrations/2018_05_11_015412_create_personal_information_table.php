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
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}
