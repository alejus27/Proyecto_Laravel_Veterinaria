<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attention extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attentions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_attention');
            $table->string('description');
            $table->timestamps();

            $table->bigInteger('id_pet')->unsigned();
            $table->foreign('id_pet')->references('id')
                ->on('pets')->onDelete('cascade');

            $table->bigInteger('id_veterinary')->unsigned();
            $table->foreign('id_veterinary')->references('id')
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
