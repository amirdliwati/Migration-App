<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection6ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_6_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_inspection')->nullable();
            $table->text('owner')->nullable();
            $table->text('place_of_inspection')->nullable();
            $table->text('maker')->nullable();
            $table->text('standard')->nullable();
            $table->integer('ID_No')->nullable();
            $table->integer('Qty')->nullable();
            $table->text('description')->nullable();
            $table->double('SWL')->nullable();
            $table->string('unit', 5)->nullable();
            $table->date('date_of_last_examination')->nullable();
            $table->date('date_of_next_examination')->nullable();
            $table->date('date_of_last_proof_load_test');
            $table->date('date_of_next_proof_load_test');
            $table->string('authorized_name', 100)->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_6_certificate');
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
        Schema::dropIfExists('inspection_6_results');
    }
}
