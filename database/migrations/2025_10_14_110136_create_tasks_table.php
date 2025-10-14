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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_steps')->constrained(table: 'steps');
            $table->foreignId('id_comments')->constrained(table: 'comments');
            $table->foreignId('id_attachs')->constrained(table: 'attachs');

            $table->foreignId('id_users')->constrained(table: 'users');

            $table->string('nome');
            // FK de Asign (???)
            $table->timestamp('dt_start');
            $table->timestamp('dt_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
