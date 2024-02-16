<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvalTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eval_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable();
            $table->string('short', 4)->nullable();
            $table->string('orientation', 3)->nullable();
            $table->string('page_size', 3)->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->double('font_size')->nullable();
            $table->unsignedInteger('font_type_id')->nullable()->index('Font_EvalTemp_FK');
            $table->text('path_certificate')->nullable();
            $table->unsignedInteger('company_informations_id')->nullable()->index('company_info_template_FK');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eval_templates');
    }
}
