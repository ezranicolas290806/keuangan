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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('username',155)->nullable(false);
            $table->BigInteger('id_admins')->nullable(false);
            $table->string('nama',55)->nullable(false);
            $table->string('no_telp',15)->nullable(false);
            $table->text('jenis_kelamin')->nullable(true);

            $table->foreign('username')->references('username')->on('user')
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
