<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingQuotationOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_quotation_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id')->nullable()->index('Course_Quotation_FK');
            $table->unsignedBigInteger('class_id')->nullable()->index('Class_Quotation_FK');
            $table->unsignedInteger('duration')->nullable();
            $table->unsignedTinyInteger('template')->nullable()->comment('1 = General, 
2 = by Cert, 
3 = by Location, 
4 = by Range');
            $table->unsignedBigInteger('tq_id')->nullable()->index('T_Quotation_FK');
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
        Schema::dropIfExists('training_quotation_offers');
    }
}
