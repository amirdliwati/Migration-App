<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attend_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('trainee_id');
            $table->unsignedBigInteger('session_id')->index('session_FK');
            $table->boolean('attend')->nullable()->comment('absent=1,attend=2');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['trainee_id', 'session_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attend_sessions');
    }
}
