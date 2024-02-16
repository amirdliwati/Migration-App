<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyBankingAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_banking_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->string('intermediary_bank_ANumber', 200)->nullable();
            $table->string('intermediary_bank_AName', 200)->nullable();
            $table->string('intermediary_bank_swift', 200)->nullable();
            $table->string('beneficiary_bank_AName', 200)->nullable();
            $table->string('beneficiary_bank_iban', 200)->nullable();
            $table->string('beneficiary_bank_details_AName', 200)->nullable();
            $table->string('beneficiary_bank_details_ANumber', 200)->nullable();
            $table->string('beneficiary_bank_details_iban', 200)->nullable();
            $table->string('beneficiary_bank_details_swift', 200)->nullable();
            $table->unsignedTinyInteger('status')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_banking_accounts');
    }
}
