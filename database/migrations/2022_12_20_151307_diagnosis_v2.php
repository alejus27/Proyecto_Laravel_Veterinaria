<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiagnosisV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('signs');
            $table->string('symptoms');
            $table->string('findings');
            $table->timestamps();
            
            $table->bigInteger('attention_id')->unsigned();

            $table->foreign('attention_id')->references('id')
                                    ->on('attentions')->onDelete('cascade');

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
