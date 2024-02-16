<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt1ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_1_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('welding_process')->nullable();
            $table->string('WPS', 100)->nullable();
            $table->string('RT_technique', 100)->nullable();
            $table->string('film_type', 100)->nullable();
            $table->string('film_processing', 100)->nullable();
            $table->string('source_to_object_distance', 100)->nullable();
            $table->string('source_to_film_distance', 100)->nullable();
            $table->string('XRay_tube_power', 100)->nullable();
            $table->string('exposure_time', 100)->nullable();
            $table->string('radiographic_source', 100)->nullable();
            $table->string('XRay_size', 100)->nullable();
            $table->string('density_range', 100)->nullable();
            $table->text('material')->nullable();
            $table->text('film_per_cassette')->nullable();
            $table->text('IQI_location')->nullable();
            $table->text('IQI_type')->nullable();
            $table->text('visible_wire')->nullable();
            $table->string('RT_procedure_no', 100)->nullable();
            $table->string('acceptance_criteria_edition', 100)->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_1_tools_cert');
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
        Schema::dropIfExists('inspection_ndt_1_tools');
    }
}
