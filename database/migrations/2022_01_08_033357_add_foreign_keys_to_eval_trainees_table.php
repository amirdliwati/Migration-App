<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvalTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eval_trainees', function (Blueprint $table) {
            $table->foreign(['class_id'], 'classEval_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'etrainee_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['trainee_id'], 'etrainee_trainee_FK')->references(['id'])->on('trainees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eval_trainees', function (Blueprint $table) {
            $table->dropForeign('classEval_FK');
            $table->dropForeign('etrainee_Emp_FK');
            $table->dropForeign('etrainee_trainee_FK');
        });
    }
}
