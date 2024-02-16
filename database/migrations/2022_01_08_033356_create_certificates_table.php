<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('issuedOn')->nullable();
            $table->unsignedInteger('valid')->nullable();
            $table->unsignedInteger('hrs')->nullable();
            $table->string('serial', 50)->nullable();
            $table->text('path')->nullable();
            $table->unsignedBigInteger('template_id')->nullable()->index('Cer_Template_FK');
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
        Schema::dropIfExists('certificates');
    }
}
