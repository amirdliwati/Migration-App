<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspectionQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_quotations', function (Blueprint $table) {
            $table->foreign(['purchaseorder_id'], 'po_quotations_IN')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['currencies_id'], 'quotations_in_currencies_id')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'template_quotations_IN')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_quotations', function (Blueprint $table) {
            $table->dropForeign('po_quotations_IN');
            $table->dropForeign('quotations_in_currencies_id');
            $table->dropForeign('template_quotations_IN');
        });
    }
}
