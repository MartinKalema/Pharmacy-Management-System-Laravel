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
        Schema::create('sales_details', function (Blueprint $table) {
            $table->id();
            $table->string('medicineName');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->decimal('discount', 8, 4)->default(0.00);
            $table->decimal('totalAmount', 8, 2);
            $table->string('salesNo');
            $table->date('date');
            $table->string('paymentType');
            $table->string('cashierName');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_details');
    }
};