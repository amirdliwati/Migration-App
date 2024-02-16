<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineeringServicesToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineering_services_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable();
            $table->date('test_due_date')->nullable();
            $table->text('reference')->nullable();
            $table->text('notes')->nullable();
            $table->text('info_certificate')->nullable();
            $table->text('certificate_details')->nullable();
            $table->unsignedBigInteger('id_certificate_qaqc')->index('engineering_services_tools_certificate');
            $table->unsignedBigInteger('item_id')->index('engineering_services_tools_certificate_item');
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
        Schema::dropIfExists('engineering_services_tools');
    }
}
