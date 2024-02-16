<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('confirms', function (Blueprint $table) {
            $table->foreign(['class_id'], 'conf_Class_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['company_id'], 'conf_company_FK')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('confirms', function (Blueprint $table) {
            $table->dropForeign('conf_Class_FK');
            $table->dropForeign('conf_company_FK');
        });
    }
}
