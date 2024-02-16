<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultTraceableReferenceStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_traceable_reference_standards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufacturer', 200)->nullable();
            $table->string('calibration_reference_used', 200)->nullable();
            $table->string('serial_number', 200)->nullable();
            $table->string('report_no', 100)->nullable();
            $table->date('reference_cal_due')->nullable();
            $table->unsignedBigInteger('certificate_qaqc_type_id')->index('certificate_type_standers_default');
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
        Schema::dropIfExists('default_traceable_reference_standards');
    }
}
