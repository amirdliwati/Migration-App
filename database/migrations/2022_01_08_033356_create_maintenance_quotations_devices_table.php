<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceQuotationsDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_quotations_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name', 100)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('manufacturer', 100)->nullable();
            $table->string('serial_number', 100)->nullable();
            $table->string('location', 150)->nullable()->default('N/A');
            $table->string('transportation', 150)->nullable()->default('N/A');
            $table->string('accommodation', 150)->nullable()->default('N/A');
            $table->string('food', 150)->nullable()->default('N/A');
            $table->double('fees')->nullable();
            $table->text('device_note')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('maintenance_quotations_id')->nullable()->index('maintenance_quotations_device');
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
        Schema::dropIfExists('maintenance_quotations_devices');
    }
}
