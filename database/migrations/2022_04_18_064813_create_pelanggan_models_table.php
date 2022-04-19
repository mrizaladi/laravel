<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public.pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelanggan')->nullable();
            $table->string('nama');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('telp')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public.pelanggan');
    }
};
