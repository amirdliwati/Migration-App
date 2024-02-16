<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTrainEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('train_emps', function (Blueprint $table) {
            $table->foreign(['employee_id'], 'we_train_emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('train_emps', function (Blueprint $table) {
            $table->dropForeign('we_train_emp_FK');
        });
    }
}
