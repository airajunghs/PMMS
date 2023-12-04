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
        Schema::create('payments', 
        function (Blueprint $table) 
        {
        $table->increments('paymentID');
        $table->string('item_name', 100)->nullable();
        $table->integer('quantity');
        $table->string('customer_name')->default('');
        $table->string('total_amount');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
