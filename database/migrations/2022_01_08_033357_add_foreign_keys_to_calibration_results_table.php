<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCalibrationResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calibration_results', function (Blueprint $table) {
            $table->foreign(['id_certificate_qaqc'], 'cal_result_cer')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['measuring_unit_id'], 'cal_result_unit')->references(['id'])->on('measuring_units')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calibration_results', function (Blueprint $table) {
            $table->dropForeign('cal_result_cer');
            $table->dropForeign('cal_result_unit');
        });
    }
}
