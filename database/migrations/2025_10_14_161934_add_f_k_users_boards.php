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
        Schema::table('users_boards', function (Blueprint $table) {
            $table->dropColumn([
                'id_users',
                'id_boards'
            ]);
        });

        Schema::table('users_boards', function (Blueprint $table) {
            // FK users
            // FK boards
            $table->foreignId('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('id_boards')->references('id')->on('boards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_boards', function (Blueprint $table) {
            $table->dropColumn([
                'id_users',
                'id_boards'
            ]);
        });
    }
};
