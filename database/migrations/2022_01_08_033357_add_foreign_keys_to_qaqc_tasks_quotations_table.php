<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcTasksQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_tasks_quotations', function (Blueprint $table) {
            $table->foreign(['employee_id'], 'qaqc_task_quotation_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['qaqc_tasks_id'], 'qaqc_task_quotation_task')->references(['id'])->on('qaqc_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_tasks_quotations', function (Blueprint $table) {
            $table->dropForeign('qaqc_task_quotation_employee');
            $table->dropForeign('qaqc_task_quotation_task');
        });
    }
}
