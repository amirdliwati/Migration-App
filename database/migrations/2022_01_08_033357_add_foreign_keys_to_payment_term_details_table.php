<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPaymentTermDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_term_details', function (Blueprint $table) {
            $table->foreign(['payment_term_id'], 'payment_terms_details')->references(['id'])->on('payment_terms')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_term_details', function (Blueprint $table) {
            $table->dropForeign('payment_terms_details');
        });
    }
}
