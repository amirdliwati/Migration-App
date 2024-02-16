<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceCardDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_card_devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner_status', 100)->nullable();
            $table->string('location', 150)->nullable();
            $table->string('site', 150)->nullable();
            $table->string('vehicle', 150)->nullable();
            $table->string('accommodation', 150)->nullable();
            $table->string('food', 150)->nullable();
            $table->string('classification', 150)->nullable();
            $table->date('target_start')->nullable();
            $table->string('actual_start', 200)->nullable();
            $table->date('target_finish')->nullable();
            $table->string('actual_finish', 200)->nullable();
            $table->string('overtime', 200)->nullable();
            $table->date('scheduled_start')->nullable();
            $table->date('scheduled_finish')->nullable();
            $table->string('duration', 200)->nullable();
            $table->string('time_remaining', 200)->nullable();
            $table->string('inventory', 150)->nullable();
            $table->string('store_keeper', 200)->nullable();
            $table->string('vendor', 200)->nullable();
            $table->string('reported_by', 200)->nullable();
            $table->string('inspector_type', 150)->nullable();
            $table->string('instructor_fees', 200)->nullable();
            $table->string('supervisor', 200)->nullable();
            $table->string('owner', 200)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('device_id')->index('maintenance_card_devices_device');
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
        Schema::dropIfExists('maintenance_card_devices');
    }
}
