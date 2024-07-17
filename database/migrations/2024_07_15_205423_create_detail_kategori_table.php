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
        Schema::create('detail_kategori', function (Blueprint $table) {
            $table->id();
            $table->integer("kategori_id");
            $table->string("harga");
            $table->string("stok");
            $table->string("desripsi");
            $table->string("diskon");
            $table->integer("color_id");
            $table->string("foto");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kategori');
    }
};
