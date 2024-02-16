<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('trainee_id');
            $table->unsignedBigInteger('class_id')->index('TC_Class_FK');
            $table->unsignedBigInteger('course_id')->index('course_FK');
            $table->unsignedBigInteger('certificate_id')->nullable()->index('Certificate_FK');
            $table->unsignedBigInteger('quotation_id')->nullable()->index('qutation_trainee_FK');
            $table->unsignedBigInteger('confirm_id')->nullable()->index('confirm_FK');
            $table->unsignedBigInteger('cer_type')->nullable()->index('trainee_Cert_FK');
            $table->unsignedBigInteger('eval_T')->nullable()->index('eval_Trainee_FK')->comment('Trainee');
            $table->unsignedBigInteger('eval_R')->nullable()->index('eval_Trainer_FK')->comment('Trainer');
            $table->unsignedInteger('attend')->nullable()->default('0');
            $table->unsignedInteger('absent')->nullable()->default('0');
            $table->unsignedInteger('status')->nullable()->comment('1= work, 2=closed, 5=suspend	');
            $table->date('dateNDT')->nullable();
            $table->unsignedInteger('totalNDT')->nullable();
            $table->unsignedInteger('methodNDT')->nullable();
            $table->unsignedInteger('visionNDT')->nullable()->default('1');
            $table->unsignedInteger('colorNDT')->nullable()->default('1');
            $table->double('NDTgeneral')->unsigned()->nullable();
            $table->double('NDTspecific')->unsigned()->nullable();
            $table->double('NDTpractical')->unsigned()->nullable();
            $table->double('NDTgrade')->unsigned()->nullable()->default(0);
            $table->float('practicalDegree', 10, 0)->unsigned()->nullable();
            $table->float('theoreticalDegree', 10, 0)->unsigned()->nullable();
            $table->float('degree', 10, 0)->unsigned()->nullable();
            $table->unsignedTinyInteger('threshold')->nullable()->default('50');
            $table->unsignedTinyInteger('finalr')->nullable()->default('1')->comment('1=failed, 2=Pass');
            $table->text('remark')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->primary(['trainee_id', 'class_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainee_courses');
    }
}
