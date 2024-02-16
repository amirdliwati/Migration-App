<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_dates', function (Blueprint $table) {
            $table->foreign(['class_id'], 'class_dates_Fk')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_dates', function (Blueprint $table) {
            $table->dropForeign('class_dates_Fk');
        });
    }
}
