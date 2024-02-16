<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCalibrationToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calibration_tools', function (Blueprint $table) {
            $table->foreign(['device_id'], 'cal_device')->references(['id'])->on('device_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['id_certificate_qaqc'], 'cal_tools_certificate')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calibration_tools', function (Blueprint $table) {
            $table->dropForeign('cal_device');
            $table->dropForeign('cal_tools_certificate');
        });
    }
}
