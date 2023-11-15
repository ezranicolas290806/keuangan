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
            $table->id();
            $table->string('id_kasir',155)->nullable(false);
            $table->bigInteger('id_pembayarans')->nullable(false);
            $table->bigInteger('jumlah_pembayarans')->nullable(false);
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
