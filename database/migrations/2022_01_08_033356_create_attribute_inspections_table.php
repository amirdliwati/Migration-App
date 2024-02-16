<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_inspections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_attribute');
            $table->string('inspection_table_title', 50)->nullable();
            $table->unsignedBigInteger('id_certificate_type')->default('143')->index('certificate_type_attributes');
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
        Schema::dropIfExists('attribute_inspections');
    }
}
