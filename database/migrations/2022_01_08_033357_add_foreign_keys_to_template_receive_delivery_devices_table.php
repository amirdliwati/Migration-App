<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateReceiveDeliveryDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_receive_delivery_devices', function (Blueprint $table) {
            $table->foreign(['company_informations_id'], 'receive_delivery_devices_company_info')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['font_type_id'], 'Receive_delivery_devices_font_type')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_receive_delivery_devices', function (Blueprint $table) {
            $table->dropForeign('receive_delivery_devices_company_info');
            $table->dropForeign('Receive_delivery_devices_font_type');
        });
    }
}
