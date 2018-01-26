<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahdv')->unsigned();
            $table->foreign('mahdv')->references('id')->on('huongdanvien')->onDelete('cascade');
            $table->string('tentour',100);
            $table->integer('gia');
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
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
        Schema::dropIfExists('tours');
    }
}
