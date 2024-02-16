<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQaqcCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qaqc_certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certificate_no', 100)->nullable();
            $table->unsignedBigInteger('id_certificate_type')->nullable()->index('cer_certificate_type');
            $table->string('type', 5)->nullable()->comment('CL IN ES');
            $table->unsignedBigInteger('id_company')->nullable()->index('cer_company');
            $table->unsignedBigInteger('id_certificate_template')->nullable()->index('cer_certificate_template');
            $table->unsignedBigInteger('quotation_CAL_id')->nullable()->index('cer_po_FK');
            $table->unsignedBigInteger('quotation_IN_id')->nullable()->index('cer_quotation_IN');
            $table->unsignedBigInteger('quotation_ES_id')->nullable()->index('cer_quotation_ES');
            $table->unsignedInteger('organization_id')->default('1')->index('organization_Certificate');
            $table->unsignedBigInteger('employee_id')->nullable()->index('cer_employee');
            $table->unsignedBigInteger('employee_approved_id')->nullable()->index('cer_employee_approved');
            $table->boolean('status')->default(false)->comment('0 -> New, 1-> Completed 2-> Approved 3 -> Canceled');
            $table->unsignedTinyInteger('finale_result')->nullable()->default('1')->comment('0-> fail 1-> pass');
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
        Schema::dropIfExists('qaqc_certificates');
    }
}
