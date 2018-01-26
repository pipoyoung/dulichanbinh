<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHuongdanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huongdanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenhdv',100);
            $table->string('phai',100);
            $table->string('diachi',100);
            $table->integer('sdt');
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
        Schema::dropIfExists('huongdanvien');
    }
}
