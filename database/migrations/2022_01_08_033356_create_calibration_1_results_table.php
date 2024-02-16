<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibration1ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibration_1_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('percent_of_range')->nullable();
            $table->double('pressure_applied_PSI')->nullable();
            $table->double('pressure_measured_PSI')->nullable();
            $table->double('deviation_as_a_full_scale')->nullable();
            $table->string('condition_results', 15)->nullable();
            $table->unsignedInteger('measuring_unit_id')->nullable()->index('cal1_unit');
            $table->unsignedBigInteger('id_certificate_qaqc')->index('cal1_cert');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calibration_1_results');
    }
}
