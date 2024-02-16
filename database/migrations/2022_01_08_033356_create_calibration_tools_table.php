<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibrationToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibration_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_calibration')->nullable();
            $table->date('test_due_date')->nullable();
            $table->double('manufacturer_specification')->nullable();
            $table->text('reference')->nullable();
            $table->text('notes')->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('device_id')->nullable()->index('cal_device');
            $table->double('accuracy')->nullable();
            $table->double('accuracy1')->nullable();
            $table->string('type_accuracy', 20)->nullable();
            $table->string('type_accuracy1', 20)->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('cal_tools_certificate');
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
        Schema::dropIfExists('calibration_tools');
    }
}
