<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPublicServicesQuotationsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('public_services_quotations_items', function (Blueprint $table) {
            $table->foreign(['public_services_quotations_id'], 'public_services_quotations_item')->references(['id'])->on('public_services_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('public_services_quotations_items', function (Blueprint $table) {
            $table->dropForeign('public_services_quotations_item');
        });
    }
}
