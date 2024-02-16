<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEngineeringServicesAllResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('engineering_services_all_results', function (Blueprint $table) {
            $table->foreign(['id_certificate_qaqc'], 'ES_All_cert')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineering_services_all_results', function (Blueprint $table) {
            $table->dropForeign('ES_All_cert');
        });
    }
}
