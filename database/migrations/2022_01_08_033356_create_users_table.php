<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->nullable()->index('user_role_FK');
            $table->unsignedBigInteger('employee_id')->nullable()->index('user_Emp_FK');
            $table->string('name');
            $table->string('email');
            $table->integer('lockout_time')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('last_login_at')->nullable();
            $table->text('last_login_ip')->nullable();
            $table->unsignedTinyInteger('status')->nullable()->comment('active = 1, not = 2');
            $table->unsignedInteger('style_id')->nullable()->index('user_style');
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
        Schema::dropIfExists('users');
    }
}
