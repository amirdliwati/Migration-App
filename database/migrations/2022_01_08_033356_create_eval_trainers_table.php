<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvalTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eval_trainers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('trainee_id')->index('etrainer_trainee_FK');
            $table->unsignedBigInteger('class_id')->nullable()->index('etrainer_class_FK');
            $table->unsignedBigInteger('employee_id')->index('etrainer_Emp_FK')->comment('trainer');
            $table->unsignedBigInteger('enterBy')->nullable()->index('enterByEmp_FK')->comment('Editor');
            $table->date('issue_date')->nullable();
            $table->boolean('attitude')->nullable()->comment('from 1-> 5');
            $table->boolean('knowledge')->nullable()->comment('from 1-> 5');
            $table->boolean('experience')->nullable()->comment('from 1-> 5');
            $table->boolean('presentation')->nullable()->comment('from 1-> 5');
            $table->boolean('motivation')->nullable()->comment('from 1-> 5');
            $table->boolean('activities')->nullable()->comment('from 1-> 5');
            $table->boolean('practical')->nullable()->comment('from 1-> 5');
            $table->boolean('content')->nullable()->comment('from 1-> 5');
            $table->boolean('relevance')->nullable()->comment('from 1-> 5');
            $table->boolean('organization')->nullable()->comment('from 1-> 5');
            $table->boolean('goals')->nullable()->comment('from 1-> 5');
            $table->boolean('location')->nullable()->comment('from 1-> 5');
            $table->boolean('timing')->nullable()->comment('from 1-> 5');
            $table->boolean('right_trainee')->nullable()->comment('yes=1,no=0');
            $table->boolean('improve')->nullable()->comment('yes=1,no=0');
            $table->text('obtain')->nullable();
            $table->text('improve_skills')->nullable();
            $table->text('recto_naya')->nullable();
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
        Schema::dropIfExists('eval_trainers');
    }
}
