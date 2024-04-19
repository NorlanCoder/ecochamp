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
        Schema::create('settings', function (Blueprint $table) {

            $table->id();
            $table->unsignedInteger('user_id')->nullable()->unsigned();
            $table->boolean('enable_follow')->default('1')->unsigned();
            $table->enum('notif_post', ['', '', ''])->default('1');
            $table->boolean('notif_mail')->default('1')->unsigned();
            $table->boolean('notif_web')->default('1')->unsigned();
            $table->boolean('notif_phone')->default('1')->unsigned();
            $table->boolean('see_alert')->default('1')->unsigned();
            $table->boolean('see_post')->default('1')->unsigned();
            $table->boolean('see_activite')->default('1')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
