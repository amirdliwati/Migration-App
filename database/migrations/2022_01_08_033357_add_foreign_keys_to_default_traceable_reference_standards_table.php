<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDefaultTraceableReferenceStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('default_traceable_reference_standards', function (Blueprint $table) {
            $table->foreign(['certificate_qaqc_type_id'], 'certificate_type_standers_default')->references(['id'])->on('certificate_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('default_traceable_reference_standards', function (Blueprint $table) {
            $table->dropForeign('certificate_type_standers_default');
        });
    }
}
