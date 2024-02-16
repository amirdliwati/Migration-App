<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicServicesQuotationsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_services_quotations_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name', 100)->nullable();
            $table->string('item_description', 600)->nullable();
            $table->string('location', 150)->nullable()->default('N/A');
            $table->string('transportation', 150)->nullable()->default('N/A');
            $table->string('accommodation', 150)->nullable()->default('N/A');
            $table->string('food', 150)->nullable()->default('N/A');
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('public_services_quotations_id')->nullable()->index('public_services_quotations_item');
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
        Schema::dropIfExists('public_services_quotations_items');
    }
}
