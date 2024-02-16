<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_logos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('path_logo');
            $table->unsignedBigInteger('template_certificate_id')->nullable()->index('logo_template');
            $table->unsignedBigInteger('template_quotations_id')->nullable()->index('logo_template_quotations');
            $table->unsignedBigInteger('receive_delivery_devices_id')->nullable()->index('logo_receive_delivery_devices');
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
        Schema::dropIfExists('template_logos');
    }
}
