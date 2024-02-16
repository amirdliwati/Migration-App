<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNormalTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('normal_tasks', function (Blueprint $table) {
            $table->foreign(['replace_emp_id'], 'normal_replace_Fk')->references(['id'])->on('replace_emp_tasks')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('normal_tasks', function (Blueprint $table) {
            $table->dropForeign('normal_replace_Fk');
        });
    }
}
