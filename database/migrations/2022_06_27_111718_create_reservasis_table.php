<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('guide_id');
            $table->string('judul');
            $table->string('jenis_perjalanan');
            $table->string('durasi_perjalanan');
            $table->string('keberangkatan');
            $table->string('status');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('guide_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
