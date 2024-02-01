<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLahanParkirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan_parkirs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mall_id');
            $table->string('lokasi');
            $table->integer('petak');
            $table->string('lantai');
            $table->timestamps();
            $table->foreign('mall_id')->references('id')->on('malls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahan_parkirs');
    }
}
