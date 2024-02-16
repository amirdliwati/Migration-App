<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInspection42ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inspection_4_2_results', function (Blueprint $table) {
            $table->foreign(['id_inspection_4_results'], 'inspection_results_4_2')->references(['id'])->on('inspection_4_results')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inspection_4_2_results', function (Blueprint $table) {
            $table->dropForeign('inspection_results_4_2');
        });
    }
}
