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
        Schema::create('areaparkirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->integer('kapasitas');
            $table->string('keterangan', 100)->nullable();
            $table->unsignedBigInteger('kampus_id');
            $table->foreign('kampus_id')->references('id')->on('kampuses')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areaparkirs');
    }
};
