<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTimeSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_sheets', function (Blueprint $table) {
            $table->foreign(['purchaseorder_id'], 'po_time_sheets')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('time_sheets', function (Blueprint $table) {
            $table->dropForeign('po_time_sheets');
        });
    }
}
