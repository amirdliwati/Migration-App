<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcTasksDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_tasks_details', function (Blueprint $table) {
            $table->foreign(['qaqc_tasks_id'], 'qaqc_tasks_details')->references(['id'])->on('qaqc_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'qaqc_tasks_details_employees')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_tasks_details', function (Blueprint $table) {
            $table->dropForeign('qaqc_tasks_details');
            $table->dropForeign('qaqc_tasks_details_employees');
        });
    }
}
