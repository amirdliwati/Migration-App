<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEngineeringServicesQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('engineering_services_quotations', function (Blueprint $table) {
            $table->foreign(['purchaseorder_id'], 'po_quotations_ES')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['currencies_id'], 'quotations_es_currencies_id')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'template_quotations_ES')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineering_services_quotations', function (Blueprint $table) {
            $table->dropForeign('po_quotations_ES');
            $table->dropForeign('quotations_es_currencies_id');
            $table->dropForeign('template_quotations_ES');
        });
    }
}
