<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEngineeringServicesToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('engineering_services_tools', function (Blueprint $table) {
            $table->foreign(['id_certificate_qaqc'], 'engineering_services_tools_certificate')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['item_id'], 'engineering_services_tools_certificate_item')->references(['id'])->on('item_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineering_services_tools', function (Blueprint $table) {
            $table->dropForeign('engineering_services_tools_certificate');
            $table->dropForeign('engineering_services_tools_certificate_item');
        });
    }
}
