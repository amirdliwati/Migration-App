<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingQuotationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_quotation_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cert_id')->nullable()->index('Offer_Cert_FK');
            $table->unsignedBigInteger('location_id')->nullable()->index('Offer_Location_FK');
            $table->text('indvLoc')->nullable();
            $table->unsignedInteger('rangeFrom')->nullable();
            $table->unsignedInteger('rangeTo')->nullable();
            $table->unsignedInteger('countGroup')->nullable();
            $table->unsignedInteger('qty')->nullable();
            $table->double('fees')->unsigned()->nullable();
            $table->unsignedTinyInteger('status')->nullable()->default('0');
            $table->unsignedBigInteger('offer_id')->nullable()->index('Offer_Details_FK');
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
        Schema::dropIfExists('training_quotation_details');
    }
}
