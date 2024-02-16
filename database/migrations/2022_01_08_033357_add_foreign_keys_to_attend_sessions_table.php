<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAttendSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attend_sessions', function (Blueprint $table) {
            $table->foreign(['session_id'], 'session_FK')->references(['id'])->on('sessions')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['trainee_id'], 'trainee_FK')->references(['id'])->on('trainees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attend_sessions', function (Blueprint $table) {
            $table->dropForeign('session_FK');
            $table->dropForeign('trainee_FK');
        });
    }
}
