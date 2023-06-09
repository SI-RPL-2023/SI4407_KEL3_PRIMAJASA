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
        Schema::create('armada_fasilitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_armada_id')->constrained('jenis_armada')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('icon')->nullable();
            $table->string('fasilitas');
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
        Schema::dropIfExists('armada_fasilitas');
    }
};
