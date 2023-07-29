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
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('category');
            $table->string('supplier');
            $table->string('name');
            $table->string('description');
            $table->string('genericName');
            $table->decimal('purchasePrice', 12, 2);
            $table->decimal('retailPrice', 12, 2);
            $table->integer('quantity');
            $table->string('unit');
            $table->date('expiry');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
