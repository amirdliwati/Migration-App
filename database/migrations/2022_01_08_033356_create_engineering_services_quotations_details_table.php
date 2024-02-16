<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineeringServicesQuotationsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineering_services_quotations_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name', 100)->nullable();
            $table->string('item_description', 600)->nullable();
            $table->string('location', 150)->nullable()->default('N/A');
            $table->string('transportation', 150)->nullable()->default('N/A');
            $table->string('accommodation', 150)->nullable()->default('N/A');
            $table->string('food', 150)->nullable()->default('N/A');
            $table->string('uom', 100)->nullable();
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('engineering_services_quotations_id')->nullable()->index('engineering_services_quotations_details');
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
        Schema::dropIfExists('engineering_services_quotations_details');
    }
}
