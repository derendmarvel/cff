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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->integer('kategori');
            $table->string('sutradara');
            $table->string('produser')->nullable();
            $table->string('penulis')->nullable();
            $table->string('rumah_produksi')->nullable();
            $table->string('penghargaan')->nullable();
            $table->string('trailer');
            $table->string('poster');
            $table->text('deskripsi');
            $table->string('tipe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
