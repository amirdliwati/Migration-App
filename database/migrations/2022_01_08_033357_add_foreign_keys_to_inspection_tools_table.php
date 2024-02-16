<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspectionToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_tools', function (Blueprint $table) {
            $table->foreign(['device_id'], 'inspection_device')->references(['id'])->on('device_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['id_certificate_qaqc'], 'inspection_tools_certificate')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_tools', function (Blueprint $table) {
            $table->dropForeign('inspection_device');
            $table->dropForeign('inspection_tools_certificate');
        });
    }
}
