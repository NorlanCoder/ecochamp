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
        Schema::create('alertfollows', function (Blueprint $table) {
            $table->id();
            $table->boolean('follow');
            $table->foreignId('user_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('alert_id')
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
        // Schema::dropIfExists('alertfollows');
    }
};
