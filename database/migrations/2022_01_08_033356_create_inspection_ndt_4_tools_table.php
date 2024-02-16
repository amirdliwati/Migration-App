<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt4ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_4_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('procedure_no', 100)->nullable();
            $table->string('rev_no_2', 100)->nullable();
            $table->text('specification')->nullable();
            $table->string('acceptance_criteria_edition', 100)->nullable();
            $table->string('instrument', 100)->nullable();
            $table->string('make', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('Serial_Number', 100)->nullable();
            $table->string('couplant', 100)->nullable();
            $table->text('special_equipment')->nullable();
            $table->text('computer_program')->nullable();
            $table->string('calibration_v1', 100)->nullable();
            $table->string('simulation_v1', 100)->nullable();
            $table->string('electronic_v1', 100)->nullable();
            $table->string('calibration_v2', 100)->nullable();
            $table->string('simulation_v2', 100)->nullable();
            $table->string('electronic_v2', 100)->nullable();
            $table->text('data_correlating')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_4_tools_cert');
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
        Schema::dropIfExists('inspection_ndt_4_tools');
    }
}
