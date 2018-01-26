<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenDiemthamquanTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('den_diemthamquan_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matour')->unsigned();
            $table->foreign('matour')->references('id')->on('tours')->onDelete('cascade');
            $table->integer('madiem')->unsigned();
            $table->foreign('madiem')->references('id')->on('diemthamquan')->onDelete('cascade');
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
        Schema::dropIfExists('den_diemthamquan_tour');
    }
}
