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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('body',2000); //長いテキストを保存するためのカラム。本文
            $table->foreignId('user_id')->constrained(); //外部キー(users_table)
            $table->foreignId('team_id')->constrained(); //外部キー(teams_table)
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::dropIfExists('posts');
    }
};
