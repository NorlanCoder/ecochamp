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
        Schema::create('alert_comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->integer('votes')->default(0);
            $table->integer('spam')->default(0);
            $table->integer('reply_id')->default(0);
            $table->string('page_id')->default(0);
            $table->string('image')->nullable();
            $table->foreignId('alert_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('alert_comments');
    }
};
