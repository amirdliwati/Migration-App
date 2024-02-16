<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id')->index('health_Emp_FK');
            $table->string('blood', 5);
            $table->float('height', 10, 0)->unsigned();
            $table->float('weight', 10, 0)->unsigned();
            $table->boolean('vision_left');
            $table->boolean('vision_right');
            $table->boolean('hear_left');
            $table->boolean('hear_right');
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
        Schema::dropIfExists('healths');
    }
}
