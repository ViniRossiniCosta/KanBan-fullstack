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
        Schema::create('attachs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained(table: 'users');
            $table->foreignId('id_tasks')->constrained(table: 'tasks');
            $table->string('url');
            $table->integer('qtd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachs');
    }
};
