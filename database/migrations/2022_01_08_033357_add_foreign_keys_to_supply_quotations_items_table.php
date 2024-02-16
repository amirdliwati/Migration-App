<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSupplyQuotationsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supply_quotations_items', function (Blueprint $table) {
            $table->foreign(['item_id'], 'supply_quotations_items')->references(['id'])->on('items')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['supply_quotation_id'], 'supply_quotations_items_supply')->references(['id'])->on('supply_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supply_quotations_items', function (Blueprint $table) {
            $table->dropForeign('supply_quotations_items');
            $table->dropForeign('supply_quotations_items_supply');
        });
    }
}
