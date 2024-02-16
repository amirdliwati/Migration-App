<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name', 100)->nullable();
            $table->string('item_description', 600)->nullable();
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->double('total')->nullable();
            $table->unsignedTinyInteger('revision');
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('purchase_order_id')->nullable()->index('purchase_orders_details_po');
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
        Schema::dropIfExists('purchase_orders_details');
    }
}
