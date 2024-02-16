<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionQuotationsFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_quotations_fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('device_model', 100)->nullable();
            $table->string('device_description', 600)->nullable();
            $table->string('location', 150)->nullable()->default('N/A');
            $table->string('transportation', 150)->nullable()->default('N/A');
            $table->string('accommodation', 150)->nullable()->default('N/A');
            $table->string('food', 150)->nullable()->default('N/A');
            $table->string('uom', 100)->nullable();
            $table->double('fees')->nullable();
            $table->double('qt')->nullable();
            $table->boolean('status')->nullable()->default(false);
            $table->unsignedBigInteger('inspection_quotations_id')->nullable()->index('inspection_quotations_fees');
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
        Schema::dropIfExists('inspection_quotations_fees');
    }
}
