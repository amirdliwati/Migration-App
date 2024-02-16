<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCalibrationQuotationsDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calibration_quotations_devices', function (Blueprint $table) {
            $table->foreign(['calibration_quotations_id'], 'calibration_quotations_devices')->references(['id'])->on('calibration_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calibration_quotations_devices', function (Blueprint $table) {
            $table->dropForeign('calibration_quotations_devices');
        });
    }
}
