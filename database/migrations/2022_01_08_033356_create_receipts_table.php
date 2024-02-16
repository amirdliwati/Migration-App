<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('serial_number', 50)->nullable();
            $table->double('total')->unsigned()->nullable();
            $table->unsignedTinyInteger('status')->default('0')->comment('0->Pending 1->in progress 2->pricing 3->completed 4->archive');
            $table->unsignedBigInteger('supplier_id')->nullable()->index('receipts_suppliers');
            $table->unsignedInteger('currency_id')->nullable()->index('receipts_currency');
            $table->unsignedBigInteger('employee_id')->nullable()->index('receipts_employees');
            $table->unsignedBigInteger('purchase_order_id')->nullable()->index('receipts_purchase_order');
            $table->text('file_path')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedTinyInteger('type')->nullable()->comment('0 -> admin 1 -> employee');
            $table->unsignedTinyInteger('return_receipt')->default('0');
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
        Schema::dropIfExists('receipts');
    }
}
