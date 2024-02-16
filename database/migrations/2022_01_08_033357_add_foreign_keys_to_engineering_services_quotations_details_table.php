<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEngineeringServicesQuotationsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('engineering_services_quotations_details', function (Blueprint $table) {
            $table->foreign(['engineering_services_quotations_id'], 'engineering_services_quotations_details')->references(['id'])->on('engineering_services_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineering_services_quotations_details', function (Blueprint $table) {
            $table->dropForeign('engineering_services_quotations_details');
        });
    }
}
