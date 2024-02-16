<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedInteger('country_id')->nullable()->index('class_country_FK');
            $table->string('location', 50);
            $table->boolean('status')->comment('1=work, 2=closed, 5=suspend');
            $table->boolean('training_method')->comment('THEORETICAL=1, PRACTICAL= 2, both=3');
            $table->string('hrs', 3)->nullable();
            $table->unsignedInteger('session_count')->nullable();
            $table->unsignedTinyInteger('hours_duration');
            $table->unsignedTinyInteger('minutes_duration');
            $table->unsignedInteger('capacity')->nullable();
            $table->text('color')->nullable();
            $table->text('inverted')->nullable();
            $table->unsignedBigInteger('employee_id')->index('Class_Emp_FK')->comment('trainer');
            $table->unsignedBigInteger('course_id')->index('Class_Course_FK');
            $table->float('tons', 10, 0)->unsigned()->nullable()->comment('Capacity in tons for ilees courses');
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
        Schema::dropIfExists('classes');
    }
}
