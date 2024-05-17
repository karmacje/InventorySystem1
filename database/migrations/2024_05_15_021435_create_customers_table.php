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
            $table->id('customer_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('date_of_birth');
            $table->string('street');
            $table->string('city');
            $table->string('province_or_state');
            $table->string('country');
            $table->string('zipcode', 20);
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
