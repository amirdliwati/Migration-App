<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTasksEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_tasks_employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('management_tasks_id')->nullable()->index('management_tasks_employees');
            $table->unsignedBigInteger('employee_id')->nullable()->index('management_task_employee_assign');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_tasks_employees');
    }
}
