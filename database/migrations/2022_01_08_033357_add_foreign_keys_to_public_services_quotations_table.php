<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPublicServicesQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('public_services_quotations', function (Blueprint $table) {
            $table->foreign(['purchaseorder_id'], 'po_quotations_public_services')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['currencies_id'], 'quotations_PS_currencies')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'template_quotations_public_services')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('public_services_quotations', function (Blueprint $table) {
            $table->dropForeign('po_quotations_public_services');
            $table->dropForeign('quotations_PS_currencies');
            $table->dropForeign('template_quotations_public_services');
        });
    }
}
