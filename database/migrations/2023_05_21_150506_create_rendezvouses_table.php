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
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            $table->string('code_rdv')->unique();
            $table->string('status')->default('en attente')->comment('en attente', 'terminé');
            $table->string('cin')->unique();
            $table->string('cne')->unique();
            $table->string('nom_fr');
            $table->string('prenom_fr');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('telephone');
            $table->string('email');
            $table->foreignId(column: 'id_time')->constrained(table: 'times')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendezvouses');
    }
};
