<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection43ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_4_3_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_test')->nullable();
            $table->text('owner')->nullable();
            $table->text('place')->nullable();
            $table->text('maker')->nullable();
            $table->string('model_No', 100)->nullable();
            $table->string('vehicle', 300)->nullable();
            $table->year('date_of_manufacture')->nullable();
            $table->string('maker_number', 300)->nullable();
            $table->string('distinguishing', 300)->nullable();
            $table->date('date_last_test')->nullable();
            $table->date('date_last_previous')->nullable();
            $table->double('safe_working_loads')->nullable();
            $table->string('unit', 5)->nullable();
            $table->date('next_test_due')->nullable();
            $table->date('date')->nullable();
            $table->string('inspector_name', 100)->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_4_3_certificate');
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
        Schema::dropIfExists('inspection_4_3_results');
    }
}
