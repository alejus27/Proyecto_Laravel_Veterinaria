<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Petv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex');
            $table->integer('age');
            $table->string('specie');
            $table->string('breed');
            $table->timestamps();

            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')
                                    ->on('users')->onDelete('cascade');
                                    
            $table->bigInteger('id_vet')->unsigned();
            $table->foreign('id_vet')->references('id')
                                    ->on('veterinaries')->onDelete('cascade');
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
