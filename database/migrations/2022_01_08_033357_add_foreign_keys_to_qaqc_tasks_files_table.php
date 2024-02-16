<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcTasksFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_tasks_files', function (Blueprint $table) {
            $table->foreign(['qaqc_tasks_id'], 'qaqc_tasks_files')->references(['id'])->on('qaqc_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_tasks_files', function (Blueprint $table) {
            $table->dropForeign('qaqc_tasks_files');
        });
    }
}
