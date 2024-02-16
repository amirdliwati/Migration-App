<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->foreign(['currency_id'], 'receipts_currency')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'receipts_employees')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['purchase_order_id'], 'receipts_purchase_order')->references(['id'])->on('purchase_orders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['supplier_id'], 'receipts_suppliers')->references(['id'])->on('suppliers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            $table->dropForeign('receipts_currency');
            $table->dropForeign('receipts_employees');
            $table->dropForeign('receipts_purchase_order');
            $table->dropForeign('receipts_suppliers');
        });
    }
}
