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
            // FK steps
            // FK comments
            // FK attach
            $table->integer('id_steps')->unsigned();
            $table->integer('id_comments')->unsigned();
            $table->integer('id_attachs')->unsigned();
            $table->integer('id_creator')->unsigned(); // FK User de User_task

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
