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
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('debut');
            $table->date('fin');
            $table->string('couverture');
            $table->string('description');
            $table->string('activite_type');
            $table->string('besoin');
            $table->string('link_facebook')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('link_tiktok')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_twitter')->nullable();
            $table->string('interventions');
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('activites');
    }
};
