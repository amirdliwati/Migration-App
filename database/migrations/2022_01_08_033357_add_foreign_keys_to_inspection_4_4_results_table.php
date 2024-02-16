<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspection44ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_4_4_results', function (Blueprint $table) {
            $table->foreign(['id_inspection_4_3_results'], 'inspection_results_4_3')->references(['id'])->on('inspection_4_3_results')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_4_4_results', function (Blueprint $table) {
            $table->dropForeign('inspection_results_4_3');
        });
    }
}
