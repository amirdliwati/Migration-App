<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_dates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('sat')->nullable();
            $table->time('sun')->nullable();
            $table->time('mon')->nullable();
            $table->time('tue')->nullable();
            $table->time('wed')->nullable();
            $table->time('thu')->nullable();
            $table->time('fri')->nullable();
            $table->unsignedBigInteger('class_id')->index('class_dates_Fk');
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
        Schema::dropIfExists('class_dates');
    }
}
