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
        Schema::create('manualworks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->timestamps();
        });

        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });       
        
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });          
        
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });          
        
        Schema::create('rewinds', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });          

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
