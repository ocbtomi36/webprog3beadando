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
        Schema::create('cimek', function (Blueprint $table) {
            $table->id('idcim');
            $table->string('orszag')->nullable(false);
            $table->string('varos')->nullable(false);
            $table->string('utca')->nullable(false);
            $table->string('hazszam')->nullable(false);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cimek');
    }
};
