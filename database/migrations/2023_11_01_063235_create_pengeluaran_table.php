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
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pegawai')->nullable(false);
            $table->bigInteger('id_pengeluaran')->nullable(false);
            $table->string('nama_pengeluaran',50)->nullable(false);
            $table->dateTime('tgl_pengeluaran')->default('2023-01-01 00:00:00')->nullable(false);
            $table->bigInteger('total')->nullable(false);
            $table->string('foto_struk',255)->nullable(true);

            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai')
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluarans');
    }
};
