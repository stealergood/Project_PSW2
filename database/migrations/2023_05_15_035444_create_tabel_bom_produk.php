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
        Schema::create('tabel_bom_produk', function (Blueprint $table) {
            $table->string('kode_bom', 100);
            $table->string('kode_bk', 100);
            $table->string('kode_produk', 100);
            $table->string('nama_produk', 200);
            $table->string('kebutuhan', 200);
            $table->engine = 'MyISAM';
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
        Schema::dropIfExists('tabel_bom_produk');
    }
};
