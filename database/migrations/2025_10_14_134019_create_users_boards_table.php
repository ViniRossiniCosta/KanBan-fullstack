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
        Schema::create('users_boards', function (Blueprint $table) {
            // FK users
            // FK boards
            $table->integer('id_users')->unsigned();
            $table->integer('id_boards')->unsigned();
            $table->string('permissao')->default('A');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_boards');
    }
};
