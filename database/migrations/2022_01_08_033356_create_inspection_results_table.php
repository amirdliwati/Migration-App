<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('reference')->nullable();
            $table->date('date_of_through_examination')->nullable();
            $table->date('date_of_report')->nullable();
            $table->text('employer')->nullable();
            $table->text('premises')->nullable();
            $table->text('description')->nullable();
            $table->double('safe_working')->nullable();
            $table->string('unit', 5)->nullable();
            $table->year('date_of_manufacture')->nullable();
            $table->date('date_of_last_through_examination')->nullable();
            $table->unsignedTinyInteger('radio_examination')->nullable();
            $table->unsignedTinyInteger('radio_answer')->nullable();
            $table->unsignedTinyInteger('interval6')->nullable();
            $table->unsignedTinyInteger('interval12')->nullable();
            $table->unsignedTinyInteger('examination_scheme')->nullable();
            $table->unsignedTinyInteger('exceptional')->nullable();
            $table->text('identification')->nullable();
            $table->unsignedTinyInteger('immediate')->nullable();
            $table->string('by_employee', 150)->nullable();
            $table->text('repair')->nullable();
            $table->text('tests')->nullable();
            $table->unsignedTinyInteger('equipment')->nullable();
            $table->text('qualifications')->nullable();
            $table->text('authenticating')->nullable();
            $table->date('latest_date')->nullable();
            $table->text('end_info')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_tools_certificate');
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
        Schema::dropIfExists('inspection_results');
    }
}
