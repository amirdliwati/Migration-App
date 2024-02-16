<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTrainingQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_quotations', function (Blueprint $table) {
            $table->foreign(['acceptedLocation'], 'ACCLocation_Quotation_FK')->references(['id'])->on('training_quotation_locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['purchaseorder_id'], 'po_quotations_TR')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['currencies_id'], 'quotations_tr_currencies_id')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'template_quotations_TR')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_quotations', function (Blueprint $table) {
            $table->dropForeign('ACCLocation_Quotation_FK');
            $table->dropForeign('po_quotations_TR');
            $table->dropForeign('quotations_tr_currencies_id');
            $table->dropForeign('template_quotations_TR');
        });
    }
}
