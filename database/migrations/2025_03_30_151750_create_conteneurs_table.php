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
        Schema::create('conteneurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conteneur_sous_category_id')->constrained('sous_categories')->onDelete('cascade');
            $table->string('label')->nullable();
            $table->string('etat')->nullable(); //occasion||neuf
            $table->decimal('prix')->nullable();
            $table->text('quick_description')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('surface')->nullable();
            $table->decimal('capacity')->nullable(); // == volume
            $table->integer('nbr_palette')->nullable();
            $table->decimal('longueur_exterieur')->nullable();
            $table->decimal('largeur_exterieur')->nullable();
            $table->decimal('hauteur_exterieur')->nullable();
            $table->decimal('longueur_interieur')->nullable();
            $table->decimal('largeur_interieur')->nullable();
            $table->decimal('hauteur_interieur')->nullable();
            $table->decimal('largeur_porte')->nullable();
            $table->decimal('hauteur_porte')->nullable();
            $table->string('structure')->nullable();
            $table->string('plancher')->nullable();
            $table->integer('passage_de_fourche')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->string('img8')->nullable();
            $table->string('img9')->nullable();
            $table->string('img10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conteneurs');
    }
};
