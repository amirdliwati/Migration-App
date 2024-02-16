<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_details', function (Blueprint $table) {
            $table->foreign(['cert_id'], 'invoice_details_Cert_FK')->references(['id'])->on('training_quotation_certs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['course_id'], 'invoice_details_Course_FK')->references(['id'])->on('courses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['invoice_id'], 'invoice_details_FK')->references(['id'])->on('invoices')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['item_id'], 'invoice_details_item')->references(['id'])->on('items')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['location_id'], 'invoice_details_Location_FK')->references(['id'])->on('training_quotation_locations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_details', function (Blueprint $table) {
            $table->dropForeign('invoice_details_Cert_FK');
            $table->dropForeign('invoice_details_Course_FK');
            $table->dropForeign('invoice_details_FK');
            $table->dropForeign('invoice_details_item');
            $table->dropForeign('invoice_details_Location_FK');
        });
    }
}
