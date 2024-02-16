<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('capital')->comment('راسمال');
            $table->unsignedBigInteger('item_id')->index('capital_item');
            $table->double('dollar_selling');
            $table->double('dollar_buy');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_prices');
    }
}
