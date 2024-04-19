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
        Schema::create('followers', function (Blueprint $table) {

            $table->unsignedInteger('publisher_id')->nullable()->unsigned();
            $table->unsignedInteger('follower_id')->nullable()->unsigned();
            $table->boolean('enable_follow')->default('1')->unsigned();
            $table->timestamps();

            $table->foreign('publisher_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('follower_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followers');
    }
};
