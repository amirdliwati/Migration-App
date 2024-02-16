<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection5ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_5_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('plant_owner')->nullable();
            $table->text('address')->nullable();
            $table->text('ph')->nullable();
            $table->text('manufacturer')->nullable();
            $table->text('model')->nullable();
            $table->text('serial_No')->nullable();
            $table->text('ID_number')->nullable();
            $table->date('inspection_date')->nullable();
            $table->date('next_inspection_date')->nullable();
            $table->text('location')->nullable();
            $table->double('SWL')->nullable();
            $table->string('unit', 5)->nullable();
            $table->date('last_inspection_date')->nullable();
            $table->string('inspector_name', 100)->nullable();
            $table->date('date1')->nullable();
            $table->string('leea_number', 20)->nullable();
            $table->string('quality_representative', 100)->nullable();
            $table->date('date2')->nullable();
            $table->text('image_path')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_5_certificate');
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
        Schema::dropIfExists('inspection_5_results');
    }
}
