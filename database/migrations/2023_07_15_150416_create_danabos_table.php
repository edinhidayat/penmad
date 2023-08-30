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
        Schema::create('danabos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('madrasah_id');
            $table->string('anggaran');
            $table->string('pengajuan');
            $table->string('diterima');
            $table->string('status');
            $table->string('tahap');
            $table->string('tahun');
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
        Schema::dropIfExists('danabos');
    }
};
