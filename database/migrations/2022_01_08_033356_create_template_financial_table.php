<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateFinancialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_financial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('type', 5)->nullable();
            $table->string('orientation', 3);
            $table->string('page_size', 3);
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->double('font_size')->nullable();
            $table->unsignedInteger('font_type_id')->nullable()->index('template_financial_fonts');
            $table->text('path_backround');
            $table->unsignedInteger('company_informations_id')->index('template_financial_company');
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
        Schema::dropIfExists('template_financial');
    }
}
