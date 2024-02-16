<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection42ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_4_2_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('boom_length')->nullable();
            $table->double('radius')->nullable();
            $table->double('test_load')->nullable();
            $table->double('boom_angle')->nullable();
            $table->unsignedBigInteger('id_inspection_4_results')->index('inspection_results_4_2');
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
        Schema::dropIfExists('inspection_4_2_results');
    }
}
