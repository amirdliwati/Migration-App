<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspection3ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_3_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_inspection')->nullable();
            $table->date('test_due_date')->nullable();
            $table->text('reference')->nullable();
            $table->text('serial_number')->nullable();
            $table->text('B_N')->nullable();
            $table->date('date')->nullable();
            $table->string('model', 50)->nullable();
            $table->string('Manufacture', 50)->nullable();
            $table->text('notes')->nullable();
            $table->string('inspector_name', 100)->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_results_3_certificate');
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
        Schema::dropIfExists('inspection_3_results');
    }
}
