<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQaqcTasksFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qaqc_tasks_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('path')->nullable();
            $table->unsignedBigInteger('qaqc_tasks_id')->nullable()->index('qaqc_tasks_files');
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
        Schema::dropIfExists('qaqc_tasks_files');
    }
}
