<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQaqcTasksQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qaqc_tasks_quotations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial_number_quotation', 50);
            $table->boolean('status')->nullable()->default(true)->comment('1-> New 2-> In progress 3-> completed');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->unsignedBigInteger('employee_id')->nullable()->index('qaqc_task_quotation_employee');
            $table->longText('results')->nullable();
            $table->date('finish_date')->nullable();
            $table->unsignedBigInteger('qaqc_tasks_id')->nullable()->index('qaqc_task_quotation_task');
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
        Schema::dropIfExists('qaqc_tasks_quotations');
    }
}
