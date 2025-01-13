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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('Endiablada');
            $table->string('description', 100)->nullable()->default('extra picante');
            $table->string('image', 100)->nullable()->default('image');
            $table->decimal('unit_price', 6, 2)->nullable()->default(123.45);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};
