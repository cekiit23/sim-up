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
        Schema::create('tb_piutang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kreditur');
            $table->integer('jumlah_hutang');
            $table->date('tgl_pinjam');
            $table->date('tgl_pengembalian');
            $table->enum('status',['Belum dibayar','Lunas','Ditunda']);
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
        Schema::dropIfExists('db_piutang');
    }
};
