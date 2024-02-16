<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDeviceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('device_informations', function (Blueprint $table) {
            $table->foreign(['receive_id'], 'receive_device')->references(['id'])->on('receive_delivery_devices')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('device_informations', function (Blueprint $table) {
            $table->dropForeign('receive_device');
        });
    }
}
