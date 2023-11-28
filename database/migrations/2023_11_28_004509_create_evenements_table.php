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
        Schema::create('evenements', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('association_id')->constrained()->onDelete('cascade');
            $table->string('libelle');
            $table->date('date_evenement');
            $table->string('lieux');
            $table->text('description');
            $table->enum('closed', ['ouvert', 'fermé'])->default('ouvert');
            $table->date('date_limite_inscription');
            $table->integer('total_place');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
