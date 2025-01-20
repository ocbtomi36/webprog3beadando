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
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->id('idfelhasznalo');
            $table->string('vezetek_nev')->nullable(false);
            $table->string('uto_nev')->nullable(false);
            $table->string('e_mail')->nullable(false);
            $table->unsignedBigInteger('profil_idprofil');
            $table->unsignedBigInteger('cim_idcim');

            $table->timestamps();

            // idegen kulcs megszorítások

            $table->foreign('profil_idprofil')
            ->references('idprofil')->on('profilok')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('cim_idcim')
            ->references('idcim')->on('cimek')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalok');
    }
};
