<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReceiveDeliveryDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receive_delivery_devices', function (Blueprint $table) {
            $table->foreign(['quotation_cl_id'], 'receive_cl_quotations')->references(['id'])->on('calibration_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['company_id'], 'receive_company')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'receive_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_in_id'], 'receive_in_quotations')->references(['id'])->on('inspection_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_mai_id'], 'receive_mai_quotations')->references(['id'])->on('maintenance_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['template_id'], 'receive_template')->references(['id'])->on('template_receive_delivery_devices')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receive_delivery_devices', function (Blueprint $table) {
            $table->dropForeign('receive_cl_quotations');
            $table->dropForeign('receive_company');
            $table->dropForeign('receive_employee');
            $table->dropForeign('receive_in_quotations');
            $table->dropForeign('receive_mai_quotations');
            $table->dropForeign('receive_template');
        });
    }
}
