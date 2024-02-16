<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign(['company_banking_account_id'], 'company_banking_account_invoice')->references(['id'])->on('company_banking_accounts')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['company_id'], 'invoice_company')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['currencies_id'], 'invoice_currency')->references(['id'])->on('currencies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'invoice_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['payment_term_id'], 'invoice_payment_term')->references(['id'])->on('payment_terms')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['po_id'], 'invoice_po')->references(['id'])->on('purchaseorders')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'invoice_template')->references(['id'])->on('template_invoices')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['payment_type_id'], 'payment_type_invoice')->references(['id'])->on('payment_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign('company_banking_account_invoice');
            $table->dropForeign('invoice_company');
            $table->dropForeign('invoice_currency');
            $table->dropForeign('invoice_employee');
            $table->dropForeign('invoice_payment_term');
            $table->dropForeign('invoice_po');
            $table->dropForeign('invoice_template');
            $table->dropForeign('payment_type_invoice');
        });
    }
}
