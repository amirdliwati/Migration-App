<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('item_id')->nullable()->index('invoice_details_item');
            $table->unsignedBigInteger('course_id')->nullable()->index('invoice_details_Course_FK');
            $table->unsignedInteger('duration')->nullable();
            $table->unsignedBigInteger('cert_id')->nullable()->index('invoice_details_Cert_FK');
            $table->unsignedBigInteger('location_id')->nullable()->index('invoice_details_Location_FK');
            $table->string('device_name', 200)->nullable();
            $table->string('device_model', 100)->nullable();
            $table->string('device_description', 600)->nullable();
            $table->string('serial_number', 150)->nullable();
            $table->unsignedInteger('groupTrainees')->nullable();
            $table->string('uom', 100)->nullable();
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->double('total')->nullable();
            $table->text('device_note')->nullable();
            $table->unsignedBigInteger('invoice_id')->nullable()->index('invoice_details_FK');
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
        Schema::dropIfExists('invoice_details');
    }
}
