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
        Schema::create('hasil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('pengguna_id');
            $table->unsignedBigInteger('quiz_id');
            $table->integer('nilai');
            $table->foreign('pengguna_id')
                ->references('id')
                ->on('pengguna');
            $table->foreign('quiz_id')
                ->references('id')
                ->on('quiz');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil');
    }
};
