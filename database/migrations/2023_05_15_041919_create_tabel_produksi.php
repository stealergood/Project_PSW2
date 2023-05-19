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
        Schema::create('tabel_produksi', function (Blueprint $table) {
            $table->increments('id_order');
            $table->string('invoice', 200);
            $table->string('kode_customer', 200);
            $table->string('kode_produk', 200);
            $table->string('nama_produk', 200);
            $table->integer('qty');
            $table->integer('harga');
            $table->string('status', 200);
            $table->date('tanggal');
            $table->string('provinsi', 200);
            $table->string('kota', 200);
            $table->string('alamat', 200);
            $table->string('kode_pos', 200);
            $table->string('terima', 200);
            $table->string('tolak', 200);
            $table->integer('cek');
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
        Schema::dropIfExists('tabel_produksi');
    }
};
