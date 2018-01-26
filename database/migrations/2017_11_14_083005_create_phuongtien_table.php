<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuongtienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongtien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenpt',100);
            $table->string('loaipt',100);
            $table->integer('socho');
            $table->string('hientrang',100);
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
        Schema::dropIfExists('phuongtien');
    }
}
