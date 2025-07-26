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
        Schema::create('preventivas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->integer('embarcacao');
            $table->integer('BB');
            $table->integer('BE');
            $table->boolean('olub');
            $table->boolean('filOlub');
            $table->boolean('filComb');
            $table->boolean('filRacor');
            $table->boolean('olRev');
            $table->boolean('filRev');
            $table->string('obs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preventivas');
    }
};
