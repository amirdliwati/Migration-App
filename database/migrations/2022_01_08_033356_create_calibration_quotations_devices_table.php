<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalibrationQuotationsDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calibration_quotations_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_model', 100)->nullable();
            $table->string('device_description', 600)->nullable();
            $table->string('location', 150)->nullable()->default('N/A');
            $table->string('transportation', 150)->nullable()->default('N/A');
            $table->string('accommodation', 150)->nullable()->default('N/A');
            $table->string('food', 150)->nullable()->default('N/A');
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->double('total')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('calibration_quotations_id')->nullable()->index('calibration_quotations_devices');
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
        Schema::dropIfExists('calibration_quotations_devices');
    }
}
