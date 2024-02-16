<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvalTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eval_trainers', function (Blueprint $table) {
            $table->foreign(['enterBy'], 'enterByEmp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['class_id'], 'etrainer_class_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'etrainer_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['trainee_id'], 'etrainer_trainee_FK')->references(['id'])->on('trainees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eval_trainers', function (Blueprint $table) {
            $table->dropForeign('enterByEmp_FK');
            $table->dropForeign('etrainer_class_FK');
            $table->dropForeign('etrainer_Emp_FK');
            $table->dropForeign('etrainer_trainee_FK');
        });
    }
}
