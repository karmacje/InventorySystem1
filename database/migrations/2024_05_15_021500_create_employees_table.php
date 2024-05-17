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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
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
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('position_id');
            $table->timestamps();

            // Define foreign key for department_id with cascade on delete and update
            $table->foreign('department_id')
                  ->references('department_id')
                  ->on('departments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            // Define foreign key for position_id with cascade on delete and update
            $table->foreign('position_id')
                  ->references('position_id')
                  ->on('positions')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
