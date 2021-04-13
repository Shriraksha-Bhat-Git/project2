<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellbooks', function (Blueprint $table)  {
            $table->id();
            $table->string('bookname', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->timestamp('purchase_date')->nullable();
            $table->decimal('price', 22)->nullable()->default(0.00);
            $table->string('update_image')->nullable();
            $table->string('authorname', 255)->nullable();
            $table->string('book_language', 255)->nullable();
            $table->string('book_condition', 255)->nullable();
            $table->longtext('description', 500)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellbooks');
    }
}