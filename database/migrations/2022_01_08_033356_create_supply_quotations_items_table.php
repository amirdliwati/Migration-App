<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyQuotationsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_quotations_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('item_id')->index('supply_quotations_items');
            $table->unsignedInteger('qt')->nullable();
            $table->double('fees')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('supply_quotation_id')->nullable()->index('supply_quotations_items_supply');
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
        Schema::dropIfExists('supply_quotations_items');
    }
}
