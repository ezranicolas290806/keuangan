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
            $table->id();
            $table->string('username',155)->nullable(false);
            $table->BigInteger('id_layanan')->nullable(false);
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
