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
        Schema::create('customers', function (Blueprint $table) {
            // We are defining all the columns that are required for this table
            $table->id('id');
            $table->string('name', 100);
            $table->string('email', 100);
            $table->text('address')->nullable();
            $table->enum('gender', ["M", "F", "O"])->nullable();
            $table->integer('points')->default(0);
            $table->string('password');
            $table->date('dob')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
