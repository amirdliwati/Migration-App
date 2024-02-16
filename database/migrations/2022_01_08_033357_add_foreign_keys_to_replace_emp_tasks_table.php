<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReplaceEmpTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replace_emp_tasks', function (Blueprint $table) {
            $table->foreign(['from_emp'], 'rep_fromEmp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['to_emp'], 'rep_toEmp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replace_emp_tasks', function (Blueprint $table) {
            $table->dropForeign('rep_fromEmp_FK');
            $table->dropForeign('rep_toEmp_FK');
        });
    }
}
