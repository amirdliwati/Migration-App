<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->string('duration', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('file_path')->nullable();
            $table->double('total_fees')->nullable();
            $table->text('payment_terms')->nullable();
            $table->unsignedInteger('currencies_id')->default('2')->index('quotations_mi_currencies_id');
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_quotations_maintenance');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_quotations_maintenance');
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
        Schema::dropIfExists('maintenance_quotations');
    }
}
