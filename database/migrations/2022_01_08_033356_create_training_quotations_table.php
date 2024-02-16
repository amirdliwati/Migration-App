<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->text('description')->nullable();
            $table->text('trnLocation')->nullable();
            $table->text('conditions')->nullable();
            $table->text('payment_terms')->nullable();
            $table->string('validity', 300)->nullable();
            $table->string('managing_directors', 100)->nullable();
            $table->unsignedBigInteger('acceptedLocation')->nullable()->index('ACCLocation_Quotation_FK');
            $table->unsignedInteger('currencies_id')->default('2')->index('quotations_tr_currencies_id');
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_quotations_TR');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_quotations_TR');
            $table->unsignedInteger('revision')->nullable();
            $table->unsignedInteger('lumpsum_general')->nullable();
            $table->unsignedTinyInteger('viewLamp_general')->nullable()->default('1')->comment('no = 1, yes = 2	');
            $table->unsignedInteger('lumpsum_package')->nullable();
            $table->unsignedTinyInteger('viewLamp_package')->nullable()->default('1')->comment('no = 1, yes = 2	');
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
        Schema::dropIfExists('training_quotations');
    }
}
