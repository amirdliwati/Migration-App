<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspectionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_results', function (Blueprint $table) {
            $table->foreign(['id_certificate_qaqc'], 'inspection_results_certificate')->references(['id'])->on('qaqc_certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_results', function (Blueprint $table) {
            $table->dropForeign('inspection_results_certificate');
        });
    }
}
