<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname_emer', 25);
            $table->string('lname_emer', 25);
            $table->boolean('relationship');
            $table->string('house_phone', 20)->nullable();
            $table->string('mobile_phone', 20)->nullable();
            $table->unsignedBigInteger('employee_id')->index('Emp_Eerg_FK');
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
        Schema::dropIfExists('emergencies');
    }
}
