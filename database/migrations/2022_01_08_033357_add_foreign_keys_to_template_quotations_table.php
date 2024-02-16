<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_quotations', function (Blueprint $table) {
            $table->foreign(['company_informations_id'], 'company_info_template_Quotation')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['font_type_id'], 'Quotation_font_type')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_quotations', function (Blueprint $table) {
            $table->dropForeign('company_info_template_Quotation');
            $table->dropForeign('Quotation_font_type');
        });
    }
}
