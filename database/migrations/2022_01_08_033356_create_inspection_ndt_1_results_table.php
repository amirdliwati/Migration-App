<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt1ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_1_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NDE_request_no', 100)->nullable();
            $table->string('weld_id', 100)->nullable();
            $table->string('surface', 100)->nullable();
            $table->string('surface_condition', 100)->nullable();
            $table->string('weld_no', 50)->nullable();
            $table->string('welder_ID', 50)->nullable();
            $table->string('material_grade', 100)->nullable();
            $table->string('thickness', 100)->nullable();
            $table->date('examination_date')->nullable();
            $table->string('time', 50)->nullable();
            $table->text('examination_result')->nullable();
            $table->text('areas_restricted')->nullable();
            $table->text('non_rejectable')->nullable();
            $table->text('rejectable')->nullable();
            $table->text('reflections')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_1_results_cert');
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
        Schema::dropIfExists('inspection_ndt_1_results');
    }
}
