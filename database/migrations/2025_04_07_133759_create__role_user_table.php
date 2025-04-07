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
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->string('admin');
            $table->string('guest');
            $table->string('student');
            $table->string('teacher');
            $table->string('super-admin');

            
            $table->unsignedBigInteger('roles_id')->unique();
 
            $table->unsignedBigInteger('user_id')->unique();
            //relacion uno a muchos con la tabla de roles
            $table->foreign('roles_id')
            ->references('id')
            ->on('roles') // La tabla de roles
            ->onDelete('cascade');
            $table->timestamps();
            //relacion muchos a muchos con la tabla user
            $table->foreign('user_id')
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
        Schema::dropIfExists('_user_role');
    }
};
