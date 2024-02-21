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
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->integer('id_pemasukan')->autoIncrement()->nullable(false);
            $table->timestamps();
            $table->date('tanggal')->nullable(false);
            $table->string('deskripsi', 255)->nullable(false);
            $table->string('harga', 10)->nullable(false);
            $table->string('foto_struk', 255)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan');
    }
};
