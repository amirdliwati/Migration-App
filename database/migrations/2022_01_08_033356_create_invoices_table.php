<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number', 100)->nullable();
            $table->unsignedInteger('payment_type_id')->index('payment_type_invoice');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->double('subtotal')->nullable();
            $table->double('discount_fixed')->nullable()->default(0);
            $table->double('discount_percentage')->nullable()->default(0);
            $table->double('transfer_fees')->nullable()->default(0);
            $table->double('tax')->nullable()->default(0);
            $table->double('invoice_total')->nullable();
            $table->text('write_payment')->nullable();
            $table->unsignedInteger('company_banking_account_id')->index('company_banking_account_invoice');
            $table->unsignedBigInteger('payment_term_id')->index('invoice_payment_term');
            $table->string('GR_number', 100)->nullable();
            $table->string('invoice_type', 30);
            $table->text('invoice_notes')->nullable();
            $table->boolean('status')->default(false)->comment('0-> Pending 1-> Sent 2-> Paid 3-> Canceled	');
            $table->unsignedBigInteger('po_id')->index('invoice_po');
            $table->unsignedInteger('currencies_id')->index('invoice_currency');
            $table->unsignedBigInteger('company_id')->index('invoice_company');
            $table->unsignedBigInteger('employee_id')->index('invoice_employee');
            $table->unsignedBigInteger('template_id')->index('invoice_template');
            $table->text('file_path')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
