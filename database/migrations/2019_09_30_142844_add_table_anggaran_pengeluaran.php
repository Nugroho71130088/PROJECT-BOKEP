<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableAnggaranPengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggaran_pengeluaran', function (Blueprint $table) {
            $table->bigIncrements('id_anggaran_pengeluaran');
            $table->unsignedBigInteger('id_pengeluaran');
            $table->string('item');
            $table->double('anggaran');
            $table->dateTime('tanggal_pengeluaran');
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
        Schema::dropIfExists('anggaran_pengeluaran');
    }
}
