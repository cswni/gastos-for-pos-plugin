<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->date('fecha')->default(now());
            $table->string('monto');
            $table->string('descripcion');
            $table->foreignId('tipo_id')->nullable()->constrained('catalogo');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
