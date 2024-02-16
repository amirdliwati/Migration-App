<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->index('Emp_Perf_FK');
            $table->unsignedBigInteger('approved_by')->index('Emp_Perf_FK2');
            $table->date('date');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedInteger('quality')->nullable();
            $table->unsignedInteger('competency')->nullable();
            $table->unsignedInteger('teamwork')->nullable();
            $table->unsignedInteger('attitude')->nullable();
            $table->unsignedInteger('improvement')->nullable();
            $table->unsignedInteger('initiative')->nullable();
            $table->unsignedInteger('solving')->nullable();
            $table->unsignedInteger('confidentiality')->nullable();
            $table->unsignedInteger('productivity')->nullable();
            $table->unsignedInteger('communication')->nullable();
            $table->unsignedInteger('personal_develop')->nullable();
            $table->unsignedInteger('lead_plan')->nullable();
            $table->unsignedInteger('manag_develop')->nullable();
            $table->unsignedInteger('decision_make')->nullable();
            $table->unsignedInteger('cust_foucs')->nullable();
            $table->unsignedInteger('manag_resourses')->nullable();
            $table->unsignedInteger('personal_present')->nullable();
            $table->unsignedInteger('achieve_target')->nullable();
            $table->double('average')->nullable();
            $table->boolean('training')->nullable()->comment('yes=1,no=0');
            $table->boolean('training_effect')->nullable()->comment('from 1-> 5');
            $table->text('notes')->nullable();
            $table->text('rec_training')->nullable();
            $table->text('summary')->nullable();
            $table->boolean('actions')->nullable();
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
        Schema::dropIfExists('performances');
    }
}
