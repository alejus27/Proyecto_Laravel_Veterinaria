<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicineDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('description');
            $table->string('expiration_date');
            $table->timestamps();
            
            $table->bigInteger('medicine_id')->unsigned();
            $table->foreign('medicine_id')->references('id')
                                    ->on('medicines')->onDelete('cascade');

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
