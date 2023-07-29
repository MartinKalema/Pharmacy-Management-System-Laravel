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
        Schema::create('administrators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('administrators')->insert([
            'username' => 'Martin Kalema',
            'password' => bcrypt('Smsc4000'),
        ]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
