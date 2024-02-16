<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLaboratoryConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laboratory_conditions', function (Blueprint $table) {
            $table->foreign(['id_certificate_types'], 'laboratory_con_cert_type')->references(['id'])->on('certificate_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laboratory_conditions', function (Blueprint $table) {
            $table->dropForeign('laboratory_con_cert_type');
        });
    }
}
