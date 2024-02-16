<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUrgentTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('urgent_tasks', function (Blueprint $table) {
            $table->foreign(['replace_emp_id'], 'urgent_task_FK')->references(['id'])->on('replace_emp_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('urgent_tasks', function (Blueprint $table) {
            $table->dropForeign('urgent_task_FK');
        });
    }
}
