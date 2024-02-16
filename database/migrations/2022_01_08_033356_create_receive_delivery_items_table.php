<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveDeliveryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_delivery_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 50)->nullable()->comment('0 -> ES');
            $table->date('date')->nullable();
            $table->unsignedBigInteger('company_id')->nullable()->index('receive_es_company');
            $table->text('reference')->nullable();
            $table->unsignedBigInteger('quotation_es_id')->nullable()->index('receive_es_quotations');
            $table->unsignedBigInteger('employee_id')->nullable()->index('receive_es_employee');
            $table->string('client_name_received', 100)->nullable();
            $table->string('client_phone_received', 20)->nullable();
            $table->text('client_signature_received')->nullable();
            $table->string('client_name_receipt', 100)->nullable();
            $table->string('client_phone_receipt', 20)->nullable();
            $table->text('client_signature_receipt')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->comment('0 -> Not Received 1-> Received 2-> Receipt 3->completed');
            $table->unsignedBigInteger('template_id')->nullable()->index('receive_es_template');
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
        Schema::dropIfExists('receive_delivery_items');
    }
}
