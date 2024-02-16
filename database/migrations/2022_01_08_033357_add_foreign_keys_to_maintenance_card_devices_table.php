<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaintenanceCardDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maintenance_card_devices', function (Blueprint $table) {
            $table->foreign(['device_id'], 'maintenance_card_devices_device')->references(['id'])->on('device_maintenance_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maintenance_card_devices', function (Blueprint $table) {
            $table->dropForeign('maintenance_card_devices_device');
        });
    }
}
