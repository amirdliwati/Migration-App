<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->comment('	1-> pending 2-> In progress 3-> completed	');
            $table->unsignedTinyInteger('priority')->nullable()->comment('1-> Urgent 2-> High 3-> Medium 4-> Low 5-> Open ');
            $table->unsignedBigInteger('employee_id')->nullable()->index('management_tasks_employee');
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
        Schema::dropIfExists('management_tasks');
    }
}
