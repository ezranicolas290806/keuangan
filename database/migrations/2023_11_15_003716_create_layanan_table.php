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
        Schema::create('layanan', function (Blueprint $table) {
            $table->bigInteger('id_pembayaran')->nullable(false);
            $table->bigInteger('id_layanan')->nullable(false)->primary();
            $table->string('nama_layanan',55)->nullable(false);
            $table->bigInteger('harga')->nullable(false);

            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran')
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
