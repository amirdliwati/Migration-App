<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection44ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_4_4_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('length')->nullable();
            $table->double('distance')->nullable();
            $table->double('test_load')->nullable();
            $table->double('swl')->nullable();
            $table->unsignedBigInteger('id_inspection_4_3_results')->index('inspection_results_4_3');
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
        Schema::dropIfExists('inspection_4_4_results');
    }
}
