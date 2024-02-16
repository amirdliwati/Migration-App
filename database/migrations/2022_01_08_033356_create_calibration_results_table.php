<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibrationResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibration_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('f_reference')->nullable();
            $table->double('indicated')->nullable();
            $table->double('deviation')->nullable();
            $table->double('relative_deviation')->nullable();
            $table->string('condition_results', 15)->nullable();
            $table->unsignedTinyInteger('type_results')->comment('0-> result 1-> result 1	');
            $table->unsignedInteger('measuring_unit_id')->nullable()->index('cal_result_unit');
            $table->unsignedBigInteger('id_certificate_qaqc')->index('form_result_cer');
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
        Schema::dropIfExists('calibration_results');
    }
}
