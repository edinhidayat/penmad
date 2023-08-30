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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('madrasah_id');
            $table->string('namaguru');
            $table->string('gelardepan');
            $table->string('gelarbelakang');
            $table->string('nip');
            $table->string('jeniskelamin');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->string('gol');
            $table->string('pangkat');
            $table->string('mapel');
            $table->string('lulusan');
            $table->string('jurusan');
            $table->string('tahunlulus');
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
        Schema::dropIfExists('gurus');
    }
};
