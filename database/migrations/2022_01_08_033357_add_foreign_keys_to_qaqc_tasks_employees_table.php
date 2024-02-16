<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcTasksEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_tasks_employees', function (Blueprint $table) {
            $table->foreign(['qaqc_tasks_id'], 'qaqc_tasks_employees')->references(['id'])->on('qaqc_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'qaqc_task_employee_assign')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_tasks_employees', function (Blueprint $table) {
            $table->dropForeign('qaqc_tasks_employees');
            $table->dropForeign('qaqc_task_employee_assign');
        });
    }
}
