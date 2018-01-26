<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiPtTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('di_pt_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matour')->unsigned();
            $table->foreign('matour')->references('id')->on('tours')->onDelete('cascade');
            $table->integer('mapt')->unsigned();
            $table->foreign('mapt')->references('id')->on('phuongtien')->onDelete('cascade');
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
        Schema::dropIfExists('di_pt_tour');
    }
}
