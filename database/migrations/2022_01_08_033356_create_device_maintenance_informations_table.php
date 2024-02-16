<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceMaintenanceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_maintenance_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_name', 200)->nullable();
            $table->string('model', 100)->nullable();
            $table->string('manufacturer', 200)->nullable();
            $table->string('serial_number', 200)->nullable();
            $table->string('location', 100)->nullable();
            $table->string('accommodation', 100)->nullable();
            $table->string('arrange_by', 100)->nullable();
            $table->string('device_status', 100)->nullable();
            $table->text('notes')->nullable();
            $table->text('accessories')->nullable();
            $table->string('classification', 150)->nullable();
            $table->text('description')->nullable();
            $table->text('img_1')->nullable();
            $table->text('img_2')->nullable();
            $table->text('img_3')->nullable();
            $table->text('img_4')->nullable();
            $table->unsignedBigInteger('receive_id')->index('receive_device');
            $table->boolean('status')->default(false)->comment('	0-> Not Maintain 1->Maintain ');
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
        Schema::dropIfExists('device_maintenance_informations');
    }
}
