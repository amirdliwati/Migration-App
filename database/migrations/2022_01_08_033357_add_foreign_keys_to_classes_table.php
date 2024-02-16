<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign(['country_id'], 'class_country_FK')->references(['id'])->on('countries')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['course_id'], 'Class_Course_FK')->references(['id'])->on('courses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'Class_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign('class_country_FK');
            $table->dropForeign('Class_Course_FK');
            $table->dropForeign('Class_Emp_FK');
        });
    }
}
