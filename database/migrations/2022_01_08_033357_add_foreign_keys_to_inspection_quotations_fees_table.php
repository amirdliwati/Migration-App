<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspectionQuotationsFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_quotations_fees', function (Blueprint $table) {
            $table->foreign(['inspection_quotations_id'], 'inspection_quotations_fees')->references(['id'])->on('inspection_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_quotations_fees', function (Blueprint $table) {
            $table->dropForeign('inspection_quotations_fees');
        });
    }
}
