<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('price_usd');
            $table->unsignedTinyInteger('status');
            $table->unsignedBigInteger('item_id')->index('out_item_FK');
            $table->unsignedInteger('price_type_id')->index('item_price_type');
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
        Schema::dropIfExists('out_prices');
    }
}
