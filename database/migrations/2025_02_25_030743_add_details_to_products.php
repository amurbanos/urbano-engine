<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('old_price', 10, 2)->nullable();
            $table->string('discount')->nullable();
            $table->string('installments')->nullable();
            $table->string('seller')->nullable();
            $table->text('link')->nullable();
            $table->string('shipping')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['old_price', 'discount', 'installments', 'seller', 'link', 'shipping']);
        });
    }
};
