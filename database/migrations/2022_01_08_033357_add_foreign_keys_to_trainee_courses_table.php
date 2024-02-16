<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTraineeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainee_courses', function (Blueprint $table) {
            $table->foreign(['certificate_id'], 'Certificate_FK')->references(['id'])->on('certificates')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['confirm_id'], 'confirm_FK')->references(['id'])->on('confirms')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['course_id'], 'course_FK')->references(['id'])->on('courses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['eval_T'], 'eval_Trainee_FK')->references(['id'])->on('eval_trainees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['eval_R'], 'eval_Trainer_FK')->references(['id'])->on('eval_trainers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['quotation_id'], 'qutation_trainee_FK')->references(['id'])->on('training_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['class_id'], 'TC_Class_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['cer_type'], 'trainee_Cert_FK')->references(['id'])->on('training_quotation_certs')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['trainee_id'], 'trainee_C_FK')->references(['id'])->on('trainees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainee_courses', function (Blueprint $table) {
            $table->dropForeign('Certificate_FK');
            $table->dropForeign('confirm_FK');
            $table->dropForeign('course_FK');
            $table->dropForeign('eval_Trainee_FK');
            $table->dropForeign('eval_Trainer_FK');
            $table->dropForeign('qutation_trainee_FK');
            $table->dropForeign('TC_Class_FK');
            $table->dropForeign('trainee_Cert_FK');
            $table->dropForeign('trainee_C_FK');
        });
    }
}
