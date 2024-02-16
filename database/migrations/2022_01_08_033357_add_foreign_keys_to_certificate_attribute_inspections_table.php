<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCertificateAttributeInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('certificate_attribute_inspections', function (Blueprint $table) {
            $table->foreign(['attribute_inspection_id'], 'attribute_attributes_inspections')->references(['id'])->on('attribute_inspections')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['qaqc_certificate_id'], 'certificates_attributes_inspections')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certificate_attribute_inspections', function (Blueprint $table) {
            $table->dropForeign('attribute_attributes_inspections');
            $table->dropForeign('certificates_attributes_inspections');
        });
    }
}
