<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTemplateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_receipts', function (Blueprint $table) {
            $table->foreign(['company_informations_id'], 'receipts_company_informations')->references(['id'])->on('company_informations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['font_type_id'], 'receipts_fonts')->references(['id'])->on('font_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_receipts', function (Blueprint $table) {
            $table->dropForeign('receipts_company_informations');
            $table->dropForeign('receipts_fonts');
        });
    }
}
