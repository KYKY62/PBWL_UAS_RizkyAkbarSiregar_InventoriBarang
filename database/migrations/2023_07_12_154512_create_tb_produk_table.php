<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->increments('produk_id');
            $table->string('produk_nama', 100);
            $table->string('produk_jumlah', 100);
            $table->string('produk_harga', 100);
            $table->string('produk_id_gambar', 100);
            $table->string('produk_id_kategori', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_produk');
    }
};
