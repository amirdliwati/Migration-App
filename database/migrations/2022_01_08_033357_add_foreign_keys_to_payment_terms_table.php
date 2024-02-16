<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_terms', function (Blueprint $table) {
            $table->foreign(['payment_type_id'], 'payment_terms_payment_type')->references(['id'])->on('payment_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_terms', function (Blueprint $table) {
            $table->dropForeign('payment_terms_payment_type');
        });
    }
}
