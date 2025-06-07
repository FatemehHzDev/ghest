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
        Schema::create('pardakhts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->string('total_price');
            $table->string('pish');
            $table->string('num_ghest');
            $table->string('sood');
            $table->string('thakhfif');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('total_sood');
            $table->string('p_date');
            $table->string('total_par');
            $table->string('mandeh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pardakhts');
    }
};
