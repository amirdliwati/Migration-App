<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionNdt42ToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_ndt_4_2_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('beam_angle', 50)->nullable();
            $table->string('Serial_No', 50)->nullable();
            $table->string('Frequency', 50)->nullable();
            $table->string('Size', 50)->nullable();
            $table->string('Type', 50)->nullable();
            $table->string('Length', 50)->nullable();
            $table->string('Reference', 50)->nullable();
            $table->string('Indication', 50)->nullable();
            $table->string('Distance', 50)->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_ndt_4_2_tools_cert');
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
        Schema::dropIfExists('inspection_ndt_4_2_tools');
    }
}
