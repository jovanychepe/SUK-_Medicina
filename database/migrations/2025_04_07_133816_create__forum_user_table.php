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
        Schema::create('_forum_user', function (Blueprint $table) {
            $table->id();
            $table->String('comment');
            $table->string('content'); 
            $table->timestamp('creation_date')->userCurrent();  

            $table->unsignedBigInteger('userms_id')->unique();
            $table->unsignedBigInteger('forum_id')->unique(); //relacion uno a muchos con la tabla forum
        
            //relacion muchos a muchos con la tabla userms
             $table->foreign('userms_id')
           ->references('id')
           ->on('userms')
           ->onDelete('cascade'); //elimina la planta si se elimina el usuario
          
            //relacion muchos a muchos con la tabla userms
            $table->foreign('forum_id')
            ->references('id')
            ->on('forums')
            ->onDelete('cascade'); //elimina el foro si se elimina el mensaje

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_forum_user');
    }
};
