<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAttributeInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attribute_inspections', function (Blueprint $table) {
            $table->foreign(['id_certificate_type'], 'certificate_type_attributes')->references(['id'])->on('certificate_types')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attribute_inspections', function (Blueprint $table) {
            $table->dropForeign('certificate_type_attributes');
        });
    }
}
