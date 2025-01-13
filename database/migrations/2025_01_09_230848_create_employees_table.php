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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name_e', 40)->nullable()->default('nombre');
            $table->string('last_name_e', 40)->nullable()->default('apellido_paterno');
            $table->string('second_last_name_e', 40)->nullable()->default('apellido_materno');
            $table->string('position', 50)->nullable()->default('cajero');
            $table->decimal('salary', 6, 2)->nullable()->default(250.45);
            $table->date('hiring_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
