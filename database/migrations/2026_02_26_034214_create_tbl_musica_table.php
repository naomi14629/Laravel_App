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
        Schema::create('tbl_musica', function (Blueprint $table) { 
            $table->id('mus_id'); $table->string('mus_titulo', 150);
             $table->string('mus_artista', 100);
              $table->string('mus_album', 100)->nullable(); 
              $table->string('mus_genero', 50)->nullable(); 
              $table->integer('mus_duracion')->nullable();
               $table->timestamp('mus_creacion')->useCurrent(); 
               $table->boolean('mus_estado')->default(true);
         }); 
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_musica');
    }
};
