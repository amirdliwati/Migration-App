<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOutPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('out_prices', function (Blueprint $table) {
            $table->foreign(['price_type_id'], 'item_price_type')->references(['id'])->on('price_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['item_id'], 'out_item_FK')->references(['id'])->on('items')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('out_prices', function (Blueprint $table) {
            $table->dropForeign('item_price_type');
            $table->dropForeign('out_item_FK');
        });
    }
}
