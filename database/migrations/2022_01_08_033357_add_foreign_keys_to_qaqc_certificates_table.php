<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_certificates', function (Blueprint $table) {
            $table->foreign(['id_certificate_template'], 'cer_certificate_template')->references(['id'])->on('template_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['id_certificate_type'], 'cer_certificate_type')->references(['id'])->on('certificate_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['id_company'], 'cer_company')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'cer_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_approved_id'], 'cer_employee_approved')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_CAL_id'], 'cer_quotation_CAL')->references(['id'])->on('calibration_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_ES_id'], 'cer_quotation_ES')->references(['id'])->on('engineering_services_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_IN_id'], 'cer_quotation_IN')->references(['id'])->on('inspection_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['organization_id'], 'organization_Certificate')->references(['id'])->on('qaqc_certificate_organizations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_certificates', function (Blueprint $table) {
            $table->dropForeign('cer_certificate_template');
            $table->dropForeign('cer_certificate_type');
            $table->dropForeign('cer_company');
            $table->dropForeign('cer_employee');
            $table->dropForeign('cer_employee_approved');
            $table->dropForeign('cer_quotation_CAL');
            $table->dropForeign('cer_quotation_ES');
            $table->dropForeign('cer_quotation_IN');
            $table->dropForeign('organization_Certificate');
        });
    }
}
