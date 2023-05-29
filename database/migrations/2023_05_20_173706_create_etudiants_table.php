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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->unique();
            $table->string('cne')->unique();
            $table->string('nom_fr');
            $table->string('prenom_fr');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('telephone');
            $table->string('email');
            $table->string('adresse');
            $table->foreignId(column: 'id_fil')->constrained(table: 'filieres')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
