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
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->id();
            $table->string('code_rdv')->unique();
            $table->string('status')->default('en attente')->comment('en attente', 'terminé');
            $table->foreignId(column: 'id_cal')->constrained(table: 'calendrier')->cascadeOnDelete();
            $table->foreignId(column: 'id_etd')->constrained(table: 'etudiants')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvous');
    }
};
