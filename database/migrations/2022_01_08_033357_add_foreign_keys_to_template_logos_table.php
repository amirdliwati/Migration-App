<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_logos', function (Blueprint $table) {
            $table->foreign(['receive_delivery_devices_id'], 'logo_receive_delivery_devices')->references(['id'])->on('template_receive_delivery_devices')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_certificate_id'], 'logo_template')->references(['id'])->on('template_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_quotations_id'], 'logo_template_quotations')->references(['id'])->on('template_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_logos', function (Blueprint $table) {
            $table->dropForeign('logo_receive_delivery_devices');
            $table->dropForeign('logo_template');
            $table->dropForeign('logo_template_quotations');
        });
    }
}
