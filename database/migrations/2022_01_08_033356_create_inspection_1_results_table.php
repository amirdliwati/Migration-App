<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection1ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_1_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_inspection')->nullable();
            $table->text('owner')->nullable();
            $table->text('place_of_inspection')->nullable();
            $table->text('reference')->nullable();
            $table->year('manufacture')->nullable();
            $table->text('owner_No')->nullable();
            $table->text('model_No')->nullable();
            $table->text('serial_No')->nullable();
            $table->text('lifting')->nullable();
            $table->double('maximum_capacity')->nullable();
            $table->double('maximum_height')->nullable();
            $table->double('maximum_reach')->nullable();
            $table->text('description_of_test')->nullable();
            $table->double('test_load')->nullable();
            $table->string('unit', 5)->nullable();
            $table->double('safe_working_load')->nullable();
            $table->string('unit2', 5)->nullable();
            $table->text('remarks')->nullable();
            $table->date('date_of_last_examination')->nullable();
            $table->date('date_of_next_examination')->nullable();
            $table->text('previous_certificate_number')->nullable();
            $table->date('date_of_last_proof_load')->nullable();
            $table->date('date')->nullable();
            $table->string('inspector_name', 100)->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_1_certificate');
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
        Schema::dropIfExists('inspection_1_results');
    }
}
