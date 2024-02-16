<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTrainingQuotationOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('training_quotation_offers', function (Blueprint $table) {
            $table->foreign(['class_id'], 'Class_Quotation_FK')->references(['id'])->on('classes')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['course_id'], 'Course_Quotation_FK')->references(['id'])->on('courses')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['tq_id'], 'T_Quotation_FK')->references(['id'])->on('training_quotations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_quotation_offers', function (Blueprint $table) {
            $table->dropForeign('Class_Quotation_FK');
            $table->dropForeign('Course_Quotation_FK');
            $table->dropForeign('T_Quotation_FK');
        });
    }
}
