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
        Schema::create('madrasahs', function (Blueprint $table) {
            $table->id();
            $table->string('nsm')->unique();
            $table->string('npsn')->nullable();
            $table->string('kodesatker')->nullable();
            $table->string('jenjang');
            $table->string('status');
            $table->string('namamadrasah');
            $table->string('alamat');
            $table->string('desa')->nullable();
            $table->string('kecamatan');
            $table->string('namakepala')->nullable();
            $table->string('nipkepala')->nullable();
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
        Schema::dropIfExists('madrasahs');
    }
};
