<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_definitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_reading', 300)->nullable();
            $table->string('relative_difference', 300)->nullable();
            $table->string('indicated_reading', 300)->nullable();
            $table->string('allowable_tolerance', 300)->nullable();
            $table->string('condition_device', 300)->nullable();
            $table->string('pressure_medium', 300)->nullable();
            $table->string('difference', 300)->nullable();
            $table->text('device_information')->nullable();
            $table->text('descriptions')->nullable();
            $table->text('specifications')->nullable();
            $table->string('working_pressure', 200)->nullable();
            $table->string('size', 200)->nullable();
            $table->string('test_pressure', 200)->nullable();
            $table->string('holding_time', 200)->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('device_description_cer');
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
        Schema::dropIfExists('device_definitions');
    }
}
