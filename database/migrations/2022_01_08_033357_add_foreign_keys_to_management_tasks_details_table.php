<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToManagementTasksDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('management_tasks_details', function (Blueprint $table) {
            $table->foreign(['management_tasks_id'], 'management_tasks_details')->references(['id'])->on('management_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'management_tasks_details_employees')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('management_tasks_details', function (Blueprint $table) {
            $table->dropForeign('management_tasks_details');
            $table->dropForeign('management_tasks_details_employees');
        });
    }
}
