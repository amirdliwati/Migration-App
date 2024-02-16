<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvalTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eval_trainees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trainee_id')->nullable()->index('etrainee_trainee_FK');
            $table->unsignedBigInteger('class_id')->nullable()->index('classEval_FK');
            $table->unsignedBigInteger('employee_id')->nullable()->index('etrainee_Emp_FK');
            $table->date('issue_date')->nullable();
            $table->unsignedTinyInteger('attitude')->nullable()->comment('from 1-> 5');
            $table->unsignedTinyInteger('knowledge')->nullable()->comment('from 1-> 5');
            $table->unsignedTinyInteger('disscuss_skills')->nullable()->comment('from 1-> 5');
            $table->unsignedTinyInteger('motivation')->nullable()->comment('from 1-> 5');
            $table->unsignedTinyInteger('activites')->nullable()->comment('from 1-> 5');
            $table->unsignedTinyInteger('practical')->nullable()->comment('from 1-> 5');
            $table->boolean('right_trainee')->nullable()->comment('yes=1,no=0');
            $table->boolean('skills')->nullable()->comment('yes=1,no=0');
            $table->boolean('improve')->nullable()->comment('yes=1,no=0');
            $table->boolean('performance')->nullable()->comment('yes=1,no=0');
            $table->boolean('naya_rec')->nullable()->comment('yes=1,no=0');
            $table->text('summary')->nullable();
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
        Schema::dropIfExists('eval_trainees');
    }
}
