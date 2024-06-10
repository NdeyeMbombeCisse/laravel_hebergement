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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('designation');
            $table->enum('etat', ['disponible','en_rupture', 'en_stock']);
            $table->integer('prix_unitaire');
            $table->string('url_img');
            $table->unsignedBigInteger('cathegorie_id');
            $table->foreign('cathegorie_id')->references('id')->on('cathegories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
