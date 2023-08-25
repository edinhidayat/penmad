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
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('madrasah_id');
            $table->string('nilai')->nullable();
            $table->string('peringkat');
            $table->string('tahun')->nullable();
            $table->string('akhirakreditasi')->nullable();
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
        Schema::dropIfExists('akreditasis');
    }
};
