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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigInteger('id_pembayaran')->nullable(false)->primary();
            $table->bigInteger('id_kasir');
            $table->bigInteger('jumlah_pembayaran')->nullable(false);
            $table->dateTime('tgl_pengeluaran')->default('2023-01-01 00:00:00')->nullable(false);

            $table->foreign('id_kasir')->references('id_kasir')->on('kasir')
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
