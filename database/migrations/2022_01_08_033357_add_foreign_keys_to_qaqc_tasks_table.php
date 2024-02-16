<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToQaqcTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qaqc_tasks', function (Blueprint $table) {
            $table->foreign(['employee_id'], 'qaqc_tasks_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qaqc_tasks', function (Blueprint $table) {
            $table->dropForeign('qaqc_tasks_employee');
        });
    }
}
