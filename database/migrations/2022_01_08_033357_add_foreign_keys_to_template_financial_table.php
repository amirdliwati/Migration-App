<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateFinancialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_financial', function (Blueprint $table) {
            $table->foreign(['company_informations_id'], 'template_financial_company')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['font_type_id'], 'template_financial_fonts')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_financial', function (Blueprint $table) {
            $table->dropForeign('template_financial_company');
            $table->dropForeign('template_financial_fonts');
        });
    }
}
