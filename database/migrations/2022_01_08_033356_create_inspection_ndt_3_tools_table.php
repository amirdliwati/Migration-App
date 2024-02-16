<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt3ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_3_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('procedure_no', 100)->nullable();
            $table->string('rev_no_2', 100)->nullable();
            $table->text('specification')->nullable();
            $table->string('acceptance_criteria_edition', 100)->nullable();
            $table->unsignedTinyInteger('liquid_fluorescent')->nullable();
            $table->unsignedTinyInteger('MethodA')->nullable();
            $table->unsignedTinyInteger('MethodB')->nullable();
            $table->unsignedTinyInteger('MethodC')->nullable();
            $table->unsignedTinyInteger('MethodD')->nullable();
            $table->unsignedTinyInteger('liquid_visible')->nullable();
            $table->unsignedTinyInteger('MethodA2')->nullable();
            $table->unsignedTinyInteger('MethodC2')->nullable();
            $table->string('penetrant_make', 50)->nullable();
            $table->string('penetrant_brand_name', 50)->nullable();
            $table->string('penetrant_application_method', 50)->nullable();
            $table->string('penetrant_batch_no', 50)->nullable();
            $table->string('penetrant_dwell_time', 50)->nullable();
            $table->string('remover_make', 50)->nullable();
            $table->string('remover_brand_name', 50)->nullable();
            $table->string('remover_application_method', 50)->nullable();
            $table->string('remover_batch_no', 50)->nullable();
            $table->string('remover_dwell_time', 50)->nullable();
            $table->string('emulsifier_make', 50)->nullable();
            $table->string('emulsifier_brand_name', 50)->nullable();
            $table->string('emulsifier_application_method', 50)->nullable();
            $table->string('emulsifier_batch_no', 50)->nullable();
            $table->string('emulsifier_dwell_time', 50)->nullable();
            $table->string('developer_make', 50)->nullable();
            $table->string('developer_brand_name', 50)->nullable();
            $table->string('developer_application_method', 50)->nullable();
            $table->string('developer_batch_no', 50)->nullable();
            $table->string('developer_dwell_time', 50)->nullable();
            $table->unsignedTinyInteger('As_welded')->nullable();
            $table->unsignedTinyInteger('PWHT')->nullable();
            $table->unsignedTinyInteger('Day_light')->nullable();
            $table->unsignedTinyInteger('artificial')->nullable();
            $table->string('lighting_equipment', 100);
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_3_tools_cert');
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
        Schema::dropIfExists('inspection_ndt_3_tools');
    }
}
