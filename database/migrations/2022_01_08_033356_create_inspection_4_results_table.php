<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection4ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_4_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('owner')->nullable();
            $table->date('date_of_thorough_exam')->nullable();
            $table->string('requested_by', 50)->nullable();
            $table->text('maker')->nullable();
            $table->text('model_No')->nullable();
            $table->text('owner_No')->nullable();
            $table->text('place_of_survey')->nullable();
            $table->text('type_of_derricking_interlock')->nullable();
            $table->text('serial_No')->nullable();
            $table->text('reference_standard')->nullable();
            $table->year('date_of_manufacture')->nullable();
            $table->double('capacity')->nullable();
            $table->text('last_certificate_No')->nullable();
            $table->date('date_last_examination')->nullable();
            $table->double('safe_working_loads')->nullable();
            $table->string('unit', 5)->nullable();
            $table->text('info_table')->nullable();
            $table->date('next_exam_due')->nullable();
            $table->date('date')->nullable();
            $table->string('inspector_name', 100)->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_4_certificate');
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
        Schema::dropIfExists('inspection_4_results');
    }
}
