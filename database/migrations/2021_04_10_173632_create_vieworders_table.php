<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vieworders', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255)->nullable();
            $table->string('orderid')->nullable();
            $table->string('bookname', 255)->nullable();
            $table->timestamp('date')->nullable();
            $table->string('shipping_address', 255)->nullable();
            $table->decimal('total_amount',22)->nullable()->default(0.00);
            $table->string('mode_of_payment', 255)->nullable();
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
        Schema::dropIfExists('vieworders');
    }
}
