<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->foreign(['currencies_id'], 'purchase_order_currencies')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'purchase_order_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['supplier_id'], 'purchase_order_supplier')->references(['id'])->on('suppliers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'template_purchase_order	')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_orders', function (Blueprint $table) {
            $table->dropForeign('purchase_order_currencies');
            $table->dropForeign('purchase_order_employee');
            $table->dropForeign('purchase_order_supplier');
            $table->dropForeign('template_purchase_order	');
        });
    }
}
