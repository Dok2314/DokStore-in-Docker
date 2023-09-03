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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')
                ->references('id')
                ->on('models')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->enum('condition', ['used', 'new'])->default('new');
            $table->enum('type', ['passenger', 'moto', 'freight', 'bus', 'air', 'water']);
            $table->enum('color', ['black', 'red', 'green', 'white', 'blue']);
            $table->year('year');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
