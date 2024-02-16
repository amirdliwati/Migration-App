<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orientation', 3);
            $table->string('page_size', 3);
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->unsignedInteger('nameX')->nullable();
            $table->unsignedInteger('nameY')->nullable();
            $table->unsignedInteger('nameSize')->nullable();
            $table->unsignedInteger('trainerX')->nullable();
            $table->unsignedInteger('trainerY')->nullable();
            $table->unsignedInteger('trainerSize')->nullable();
            $table->unsignedInteger('companyX')->nullable();
            $table->unsignedInteger('companyY')->nullable();
            $table->unsignedInteger('companySize')->nullable();
            $table->unsignedInteger('numX')->nullable();
            $table->unsignedInteger('numY')->nullable();
            $table->unsignedInteger('numSize')->nullable();
            $table->unsignedInteger('issueX')->nullable();
            $table->unsignedInteger('issueY')->nullable();
            $table->unsignedInteger('issueSize')->nullable();
            $table->unsignedInteger('validX')->nullable();
            $table->unsignedInteger('validY')->nullable();
            $table->unsignedInteger('validSize')->nullable();
            $table->unsignedInteger('hrsX')->nullable();
            $table->unsignedInteger('hrsY')->nullable();
            $table->unsignedInteger('hrsSize')->nullable();
            $table->unsignedInteger('serialX')->nullable();
            $table->unsignedInteger('serialY')->nullable();
            $table->unsignedInteger('serialSize')->nullable();
            $table->unsignedInteger('quaX')->nullable();
            $table->unsignedInteger('quaY')->nullable();
            $table->unsignedInteger('durationX')->nullable();
            $table->unsignedInteger('durationY')->nullable();
            $table->unsignedInteger('totalNDTX')->nullable();
            $table->unsignedInteger('totalNDTY')->nullable();
            $table->unsignedInteger('expNDTX')->nullable();
            $table->unsignedInteger('expNDTY')->nullable();
            $table->unsignedInteger('datevisionNDTX')->nullable();
            $table->unsignedInteger('datevisionNDTY')->nullable();
            $table->unsignedInteger('VexamNDTX')->nullable();
            $table->unsignedInteger('VexamNDTY')->nullable();
            $table->unsignedInteger('colorNDTX')->nullable();
            $table->unsignedInteger('colorNDTY')->nullable();
            $table->unsignedInteger('sizeNDT')->nullable();
            $table->unsignedInteger('generalX')->nullable();
            $table->unsignedInteger('generalY')->nullable();
            $table->unsignedInteger('spicX')->nullable();
            $table->unsignedInteger('spicY')->nullable();
            $table->unsignedInteger('practX')->nullable();
            $table->unsignedInteger('practY')->nullable();
            $table->unsignedInteger('gradeX')->nullable();
            $table->unsignedInteger('gradeY')->nullable();
            $table->unsignedInteger('sizegradeNDT')->nullable();
            $table->unsignedInteger('qrX')->nullable();
            $table->unsignedInteger('qrY')->nullable();
            $table->string('shortCard', 10)->nullable();
            $table->string('card_o', 3)->nullable();
            $table->string('card_size', 12)->nullable();
            $table->unsignedInteger('card_width')->nullable();
            $table->unsignedInteger('card_height')->nullable();
            $table->unsignedInteger('card_courseX')->nullable();
            $table->unsignedInteger('card_courseY')->nullable();
            $table->unsignedInteger('card_courseSize')->nullable();
            $table->unsignedInteger('card_serialX')->nullable();
            $table->unsignedInteger('card_serialY')->nullable();
            $table->unsignedInteger('card_serialSize')->nullable();
            $table->unsignedInteger('card_nameX')->nullable();
            $table->unsignedInteger('card_nameY')->nullable();
            $table->unsignedInteger('card_nameSize')->nullable();
            $table->unsignedInteger('card_IssuX')->nullable();
            $table->unsignedInteger('card_IssuY')->nullable();
            $table->unsignedInteger('card_IssuSize')->nullable();
            $table->unsignedInteger('card_validX')->nullable();
            $table->unsignedInteger('card_validY')->nullable();
            $table->unsignedInteger('card_validSize')->nullable();
            $table->unsignedInteger('card_MethodX')->nullable();
            $table->unsignedInteger('card_MethodY')->nullable();
            $table->unsignedInteger('card_MethodSize')->nullable();
            $table->unsignedInteger('card_LevelX')->nullable();
            $table->unsignedInteger('card_LevelY')->nullable();
            $table->unsignedInteger('card_LevelSize')->nullable();
            $table->unsignedInteger('card_TrainerX')->nullable();
            $table->unsignedInteger('card_TrainerY')->nullable();
            $table->unsignedInteger('card_TrainerSize')->nullable();
            $table->unsignedInteger('card_hrsX')->nullable();
            $table->unsignedInteger('card_hrsY')->nullable();
            $table->unsignedInteger('card_hrsSize')->nullable();
            $table->string('backCard', 10)->nullable();
            $table->unsignedInteger('card_qrX')->nullable();
            $table->unsignedInteger('card_qrY')->nullable();
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
        Schema::dropIfExists('templates');
    }
}
