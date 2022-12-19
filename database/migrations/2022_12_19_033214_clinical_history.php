<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClinicalHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reason_consultation');
            $table->string('vaccination');
            $table->string('sterilized');
            $table->double('weight');
            $table->double('pulse');
            $table->string('deworming');
            $table->string('antecedents');
            $table->timestamps();

            $table->bigInteger('id_pet')->unsigned();
            $table->foreign('id_pet')->references('id')
                                    ->on('pets');

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
