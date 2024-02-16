<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToItemInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_informations', function (Blueprint $table) {
            $table->foreign(['receive_id'], 'receive_item')->references(['id'])->on('receive_delivery_items')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_informations', function (Blueprint $table) {
            $table->dropForeign('receive_item');
        });
    }
}
