<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image')->nullable()->comment('Uploads/Devices_images/DeviceID/ImageDevice_ImageID_DeviceID.jpeg');
            $table->string('title', 100)->nullable();
            $table->unsignedBigInteger('id_device_info')->nullable()->index('device_image_cer');
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
        Schema::dropIfExists('device_images');
    }
}
