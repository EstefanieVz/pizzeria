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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name_d', 40)->nullable()->default('nombre');
            $table->string('last_name_d', 40)->nullable()->default('apellido_paterno');
            $table->string('second_last_name_d', 40)->nullable()->default('apellido_materno');
            $table->decimal('salary_d', 6, 2)->nullable()->default(250.45);
            $table->date('hiring_date_d')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
