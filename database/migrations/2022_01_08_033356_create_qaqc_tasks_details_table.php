<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQaqcTasksDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qaqc_tasks_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment')->nullable();
            $table->unsignedBigInteger('qaqc_tasks_id')->nullable()->index('qaqc_tasks_details');
            $table->unsignedBigInteger('employee_id')->nullable()->index('qaqc_tasks_details_employees');
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
        Schema::dropIfExists('qaqc_tasks_details');
    }
}
