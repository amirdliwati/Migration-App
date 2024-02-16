<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_of_inspection')->nullable();
            $table->date('test_due_date')->nullable();
            $table->text('reference')->nullable();
            $table->text('notes')->nullable();
            $table->text('info_certificate')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('inspection_tools_certificate');
            $table->unsignedBigInteger('device_id')->nullable()->index('inspection_device');
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
        Schema::dropIfExists('inspection_tools');
    }
}
