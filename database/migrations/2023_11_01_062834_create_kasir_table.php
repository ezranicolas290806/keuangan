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
        Schema::create('kasir', function (Blueprint $table) {
            $table->string('username',155)->nullable(false);
            $table->BigInteger('id_kasir')->nullable(false)->primary();
            $table->string('nama',50)->nullable(false);
            $table->string('no_telp',15)->nullable(false);
            $table->text('alamat')->nullable(true);

            $table->foreign('username')->references('username')->on('user')
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasirs');
    }
};
