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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('username', 30);
            $table->string('name', 50);
            $table->string('password', 16);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable();
            $table->string('bio')->nullable();
            $table->text('about')->nullable();
            $table->string('link');
            $table->integer('role');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
