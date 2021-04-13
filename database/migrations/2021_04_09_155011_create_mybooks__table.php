<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMybooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybooks', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('bookname', 255)->nullable();
            $table->longtext('description', 250)->nullable();
            $table->string('authorname', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('book_language', 255)->nullable();
            $table->timestamp('purchase_date')->nullable();
            $table->string('book_condition', 255)->nullable();
            $table->decimal('price', 22)->nullable()->default(0.00);
            $table->decimal('selling_date')->nullable();
            $table->string('book_status', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mybooks');
    }
}
