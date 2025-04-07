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
        Schema::create('userms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Last name1');
            $table->string('Last name2')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->string('address')->nullable();
            $table->timestamp('registration_date')->userCurrent();
            $table->string('role');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userms');
    }
};
