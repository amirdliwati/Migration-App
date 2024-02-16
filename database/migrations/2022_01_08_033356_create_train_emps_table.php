<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_emps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('course', 50);
            $table->string('institute', 50)->nullable();
            $table->string('result', 50)->nullable();
            $table->text('attach')->nullable();
            $table->unsignedBigInteger('employee_id')->index('we_train_emp_FK');
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
        Schema::dropIfExists('train_emps');
    }
}
