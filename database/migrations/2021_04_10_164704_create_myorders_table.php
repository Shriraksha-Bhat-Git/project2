<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myorders', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('myorders');
    }
}
