<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->text('ingredients');
            $table->date('manufactured_date');
            $table->date('expiry_date');
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('category_id')
            ->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}

