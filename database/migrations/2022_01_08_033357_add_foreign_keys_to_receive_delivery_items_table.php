<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReceiveDeliveryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receive_delivery_items', function (Blueprint $table) {
            $table->foreign(['company_id'], 'receive_es_company')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'receive_es_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_es_id'], 'receive_es_quotations')->references(['id'])->on('engineering_services_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'receive_es_template')->references(['id'])->on('template_receive_delivery_devices')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receive_delivery_items', function (Blueprint $table) {
            $table->dropForeign('receive_es_company');
            $table->dropForeign('receive_es_employee');
            $table->dropForeign('receive_es_quotations');
            $table->dropForeign('receive_es_template');
        });
    }
}
