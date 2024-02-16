<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCalibrationAllResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calibration_all_results', function (Blueprint $table) {
            $table->foreign(['id_certificate_qaqc'], 'calAll_cert')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calibration_all_results', function (Blueprint $table) {
            $table->dropForeign('calAll_cert');
        });
    }
}
