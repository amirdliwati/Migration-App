<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaintenanceQuotationsDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maintenance_quotations_devices', function (Blueprint $table) {
            $table->foreign(['maintenance_quotations_id'], 'maintenance_quotations_device')->references(['id'])->on('maintenance_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maintenance_quotations_devices', function (Blueprint $table) {
            $table->dropForeign('maintenance_quotations_device');
        });
    }
}
