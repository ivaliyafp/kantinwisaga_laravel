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
        Schema::create('menuItems', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->string('jenis_makanan');
            $table->decimal('harga_makanan', 10, 2);
            $table->integer('jumlah_makanan');
            $table->integer('stok');
            $table->string('gambar')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuItems');
    }
};
