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
        Schema::create('tabel_produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            // $table->string('kode_produk', 100);
            $table->string('nama', 100);
            $table->string('image');
            $table->text('deskripsi');
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
        Schema::dropIfExists('tabel_produk');
    }
};
