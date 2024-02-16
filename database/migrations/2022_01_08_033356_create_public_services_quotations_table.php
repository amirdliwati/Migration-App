<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicServicesQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_services_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->string('duration', 500)->nullable();
            $table->text('description')->nullable();
            $table->double('total_fees')->nullable();
            $table->boolean('view_total')->default(true);
            $table->boolean('view_location')->default(true);
            $table->boolean('view_transportation')->default(true);
            $table->boolean('view_accommodation')->default(true);
            $table->boolean('view_food')->default(true);
            $table->text('payment_terms')->nullable();
            $table->text('q_notes')->nullable();
            $table->unsignedInteger('currencies_id')->default('2')->index('quotations_ps_currencies_id');
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_quotations_PS');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_quotations_PS');
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
        Schema::dropIfExists('public_services_quotations');
    }
}
