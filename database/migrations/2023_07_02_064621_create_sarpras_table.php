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
        Schema::create('sarpras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('madrasah_id');
            $table->string('sarpras');
            $table->string('merk')->nullable();
            $table->string('baik')->nullable();
            $table->string('rr')->nullable();
            $table->string('rs')->nullable();
            $table->string('rb')->nullable();
            $table->string('jumlah');
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
        Schema::dropIfExists('sarpras');
    }
};
