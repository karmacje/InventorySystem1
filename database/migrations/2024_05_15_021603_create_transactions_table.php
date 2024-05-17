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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->unsignedBigInteger('order_id')->unique();
            $table->unsignedBigInteger('employee_id');
            $table->string('payment_type');
            $table->timestamp('transaction_date');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
