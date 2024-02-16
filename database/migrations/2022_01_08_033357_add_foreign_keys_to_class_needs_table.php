<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_needs', function (Blueprint $table) {
            $table->foreign(['class_id'], 'class_needs_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['from_emp_id'], 'from_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'to_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_needs', function (Blueprint $table) {
            $table->dropForeign('class_needs_FK');
            $table->dropForeign('from_Emp_FK');
            $table->dropForeign('to_Emp_FK');
        });
    }
}
