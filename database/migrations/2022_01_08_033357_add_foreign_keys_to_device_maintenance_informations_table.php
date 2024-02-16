<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDeviceMaintenanceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('device_maintenance_informations', function (Blueprint $table) {
            $table->foreign(['receive_id'], 'delivery_receive_device_maintenance')->references(['id'])->on('receive_delivery_devices')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('device_maintenance_informations', function (Blueprint $table) {
            $table->dropForeign('delivery_receive_device_maintenance');
        });
    }
}
