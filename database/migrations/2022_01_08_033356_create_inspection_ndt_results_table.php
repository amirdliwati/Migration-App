<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdtResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('drawing_no', 50)->nullable();
            $table->string('spool_no', 100)->nullable();
            $table->string('weld_no', 100)->nullable();
            $table->string('size_in', 50)->nullable();
            $table->string('thickness', 50)->nullable();
            $table->string('weld_type', 50)->nullable();
            $table->string('welder_no', 50)->nullable();
            $table->text('film_location')->nullable();
            $table->string('crack', 50)->nullable();
            $table->string('burn_through', 50)->nullable();
            $table->string('concave_root', 50)->nullable();
            $table->string('excess_penetration', 50)->nullable();
            $table->string('lack_of_fusion', 50)->nullable();
            $table->string('lack_of_penetration', 50)->nullable();
            $table->string('slag_defect', 50)->nullable();
            $table->string('undercut', 50)->nullable();
            $table->string('porosity', 50)->nullable();
            $table->string('surface_concavity', 50)->nullable();
            $table->text('other')->nullable();
            $table->string('result', 50)->nullable();
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_results_cert');
            $table->text('welder_name')->nullable();
            $table->string('WQT_no', 50)->nullable();
            $table->text('position')->nullable();
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
        Schema::dropIfExists('inspection_ndt_results');
    }
}
