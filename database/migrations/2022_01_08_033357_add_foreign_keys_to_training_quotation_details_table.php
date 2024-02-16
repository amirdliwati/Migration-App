<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTrainingQuotationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_quotation_details', function (Blueprint $table) {
            $table->foreign(['cert_id'], 'Offer_Cert_FK')->references(['id'])->on('training_quotation_certs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['offer_id'], 'Offer_Details_FK')->references(['id'])->on('training_quotation_offers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['location_id'], 'Offer_Location_FK')->references(['id'])->on('training_quotation_locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_quotation_details', function (Blueprint $table) {
            $table->dropForeign('Offer_Cert_FK');
            $table->dropForeign('Offer_Details_FK');
            $table->dropForeign('Offer_Location_FK');
        });
    }
}
