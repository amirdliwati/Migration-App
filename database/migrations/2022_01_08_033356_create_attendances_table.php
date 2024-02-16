<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('punch_time');
            $table->tinyInteger('punch_state')->nullable();
            $table->string('terminal_sn', 100)->nullable();
            $table->string('terminal_alias', 100)->nullable();
            $table->unsignedBigInteger('employee_id')->index('attendance_employee');
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->unsignedTinyInteger('sync')->nullable()->default('0');
            $table->timestamp('created_at')->nullable()->useCurrent();
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
        Schema::dropIfExists('attendances');
    }
}
