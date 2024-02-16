<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainees', function (Blueprint $table) {
            $table->foreign(['company_id'], 'trainee_Com_FK')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['Nationality'], 'trainee_National_FK')->references(['id'])->on('countries')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainees', function (Blueprint $table) {
            $table->dropForeign('trainee_Com_FK');
            $table->dropForeign('trainee_National_FK');
        });
    }
}
