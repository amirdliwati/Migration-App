<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_certificates', function (Blueprint $table) {
            $table->foreign(['font_type_id'], 'cert_font_type')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['company_informations_id'], 'company_info_template')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_certificates', function (Blueprint $table) {
            $table->dropForeign('cert_font_type');
            $table->dropForeign('company_info_template');
        });
    }
}
