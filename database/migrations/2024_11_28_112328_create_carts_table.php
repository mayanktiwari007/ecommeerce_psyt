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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('productId')->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('customerId')->default(0);
            $table->string('size')->nullable(); // Adding the size column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(Blueprint $table)
    {
        Schema::dropIfExists('carts');
        $table->dropColumn('size');
    }
};
