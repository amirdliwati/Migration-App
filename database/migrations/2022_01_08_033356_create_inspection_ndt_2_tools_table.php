<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt2ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_2_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('procedure_no', 100)->nullable();
            $table->string('rev_no_2', 100)->nullable();
            $table->text('specification')->nullable();
            $table->string('acceptance_criteria_edition', 100)->nullable();
            $table->text('magnetizing_equipment')->nullable();
            $table->unsignedTinyInteger('AC_Yoke')->nullable();
            $table->unsignedTinyInteger('DC_Yoke')->nullable();
            $table->unsignedTinyInteger('Permanent_Yoke')->nullable();
            $table->unsignedTinyInteger('Prods')->nullable();
            $table->unsignedTinyInteger('Other')->nullable();
            $table->string('lifting_power', 100)->nullable();
            $table->text('prod_pole_spacing')->nullable();
            $table->string('test_equipment_no', 100)->nullable();
            $table->unsignedTinyInteger('visible')->nullable();
            $table->unsignedTinyInteger('fluorescent')->nullable();
            $table->unsignedTinyInteger('Wet')->nullable();
            $table->unsignedTinyInteger('Dry')->nullable();
            $table->unsignedTinyInteger('Continuous')->nullable();
            $table->unsignedTinyInteger('Residual')->nullable();
            $table->string('make1', 100);
            $table->string('batch_no1', 100);
            $table->string('application_method1', 100);
            $table->string('make2', 100)->nullable();
            $table->string('batch_no2', 100)->nullable();
            $table->string('application_method2', 100)->nullable();
            $table->unsignedTinyInteger('As_welded')->nullable();
            $table->unsignedTinyInteger('PWHT')->nullable();
            $table->unsignedTinyInteger('As_Grinding')->nullable();
            $table->unsignedTinyInteger('Day_light')->nullable();
            $table->unsignedTinyInteger('artificial')->nullable();
            $table->string('lighting_equipment', 100);
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_2_tools_cert');
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
        Schema::dropIfExists('inspection_ndt_2_tools');
    }
}
