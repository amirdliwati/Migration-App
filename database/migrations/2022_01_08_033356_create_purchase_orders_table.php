<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->string('subject', 300)->nullable();
            $table->string('duration', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('conditions_terms')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->default('0')->comment('0-> Pending 1-> In Progress 2-> completed 3-> Canceled 4-> Requested For Modifying 5->created Invoice 6->Requested For Modifying Financial 7->Archive	');
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('employee_id')->index('purchase_order_employee');
            $table->unsignedBigInteger('supplier_id')->index('purchase_order_supplier');
            $table->unsignedInteger('currencies_id')->default('2')->index('purchase_order_currencies');
            $table->unsignedBigInteger('template_id')->nullable()->index('template_purchase_order');
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
        Schema::dropIfExists('purchase_orders');
    }
}
