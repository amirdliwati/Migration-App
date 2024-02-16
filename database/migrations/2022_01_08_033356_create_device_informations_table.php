<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name', 200)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('manufacturer', 200)->nullable();
            $table->string('serial_number', 200)->nullable();
            $table->date('calibration_date')->nullable();
            $table->string('calibration_interval', 20)->nullable();
            $table->string('as_received_condition', 20)->nullable();
            $table->string('as_left_condition', 20)->nullable();
            $table->unsignedBigInteger('receive_id')->index('receive_device');
            $table->text('notes')->nullable();
            $table->boolean('status')->default(false)->comment('	0-> unused 1->used 2->maintenance');
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
        Schema::dropIfExists('device_informations');
    }
}
