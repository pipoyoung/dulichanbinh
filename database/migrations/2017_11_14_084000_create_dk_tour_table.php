<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDkTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dk_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('makh')->unsigned();
            $table->foreign('makh')->references('id')->on('users')->onDelete('cascade');
            $table->integer('matour')->unsigned();
            $table->foreign('matour')->references('id')->on('tours')->onDelete('cascade');
            $table->integer('soluong');
            $table->integer('tongtien');
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
        Schema::dropIfExists('dk_tour');
    }
}
