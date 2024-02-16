<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplyQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->string('duration', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('total_fees')->nullable();
            $table->text('payment_terms')->nullable();
            $table->unsignedInteger('currencies_id')->default('2')->index('quotations_sup_currencies_id');
            $table->text('array_items')->nullable();
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_quotations_Supply');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_quotations_Supply');
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
        Schema::dropIfExists('supply_quotations');
    }
}
