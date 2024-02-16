<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvalTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eval_templates', function (Blueprint $table) {
            $table->foreign(['company_informations_id'], 'company_info_template_FK')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['font_type_id'], 'Font_EvalTemp_FK')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eval_templates', function (Blueprint $table) {
            $table->dropForeign('company_info_template_FK');
            $table->dropForeign('Font_EvalTemp_FK');
        });
    }
}
