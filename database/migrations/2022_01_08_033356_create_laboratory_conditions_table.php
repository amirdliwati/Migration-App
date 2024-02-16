<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_conditions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('temperature', 30)->nullable();
            $table->string('humidity', 30)->nullable();
            $table->string('notes', 300)->nullable();
            $table->unsignedBigInteger('id_certificate_types')->index('laboratory-con-cert-type');
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
        Schema::dropIfExists('laboratory_conditions');
    }
}
