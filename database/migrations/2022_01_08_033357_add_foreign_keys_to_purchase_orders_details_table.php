<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPurchaseOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_orders_details', function (Blueprint $table) {
            $table->foreign(['purchase_order_id'], 'purchase_orders_details_po')->references(['id'])->on('purchase_orders')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_orders_details', function (Blueprint $table) {
            $table->dropForeign('purchase_orders_details_po');
        });
    }
}
