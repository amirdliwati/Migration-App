<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdtToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('plant_unit')->nullable();
            $table->string('contract_number', 100)->nullable();
            $table->string('project_no', 100)->nullable();
            $table->string('record_no', 100)->nullable();
            $table->string('NDE_request_no', 100)->nullable();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->string('VT_report', 100)->nullable();
            $table->string('drawing_no', 100)->nullable();
            $table->string('rev_no', 100)->nullable();
            $table->text('system_no')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_tools_cert');
            $table->unsignedTinyInteger('company_signature')->nullable();
            $table->string('employee', 100)->nullable();
            $table->date('date_signature')->nullable();
            $table->string('ref_ITP_no', 100)->nullable();
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
        Schema::dropIfExists('inspection_ndt_tools');
    }
}
