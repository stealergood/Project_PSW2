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
        Schema::create('tabel_keranjang', function (Blueprint $table) {
            $table->integer('id_keranjang');
            $table->string('kode_customer', 100);
            $table->string('kode_produk', 100);
            $table->string('nama_produk', 100);
            $table->integer('qty');
            $table->integer('harga');
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
        Schema::dropIfExists('tabel_keranjang');
    }
};
