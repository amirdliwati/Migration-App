<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvalLogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eval_logos', function (Blueprint $table) {
            $table->foreign(['eval_template_id'], 'logo_template_FK')->references(['id'])->on('eval_templates')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eval_logos', function (Blueprint $table) {
            $table->dropForeign('logo_template_FK');
        });
    }
}
