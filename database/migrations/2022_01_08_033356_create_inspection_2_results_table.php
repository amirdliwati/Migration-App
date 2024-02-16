<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection2ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_2_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_inspection')->nullable();
            $table->text('address')->nullable();
            $table->text('TLE')->nullable();
            $table->text('safety_factors')->nullable();
            $table->text('CODE_NO')->nullable();
            $table->string('material', 50)->nullable();
            $table->date('manu_date')->nullable();
            $table->text('lingth')->nullable();
            $table->text('S_N')->nullable();
            $table->date('date_next_inspection')->nullable();
            $table->text('SWL')->nullable();
            $table->string('unit', 5);
            $table->string('inspector_name', 100)->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_2_certificate');
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
        Schema::dropIfExists('inspection_2_results');
    }
}
