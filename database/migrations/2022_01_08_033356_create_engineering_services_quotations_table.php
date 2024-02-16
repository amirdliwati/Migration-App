<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineeringServicesQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineering_services_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->string('process', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('q_notes')->nullable();
            $table->text('payment_terms')->nullable();
            $table->double('total_fees')->nullable();
            $table->boolean('view_total')->default(true);
            $table->boolean('view_location')->default(true);
            $table->boolean('view_transportation')->default(true);
            $table->boolean('view_accommodation')->default(true);
            $table->boolean('view_food')->default(true);
            $table->string('validity', 300)->nullable();
            $table->unsignedInteger('currencies_id')->default('2')->index('quotations_es_currencies_id');
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_quotations_ES');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_quotations_ES');
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
        Schema::dropIfExists('engineering_services_quotations');
    }
}
