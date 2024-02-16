<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedTinyInteger('prefix')->nullable();
            $table->string('full_name', 200);
            $table->boolean('gender')->comment('female=0, male=1');
            $table->date('date_birth');
            $table->string('email', 200);
            $table->string('phone', 25);
            $table->string('degree', 25);
            $table->string('english', 25);
            $table->string('post', 200)->nullable();
            $table->unsignedInteger('status')->nullable()->comment('1= work, 2=closed, 5=suspend');
            $table->unsignedInteger('Nationality')->index('trainee_National_FK');
            $table->string('national_no', 30)->nullable();
            $table->unsignedBigInteger('company_id')->nullable()->index('trainee_Com_FK');
            $table->text('pict')->nullable();
            $table->text('sign')->nullable();
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
        Schema::dropIfExists('trainees');
    }
}
