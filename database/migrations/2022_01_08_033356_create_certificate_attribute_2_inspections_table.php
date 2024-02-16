<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateAttribute2InspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_attribute_2_inspections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('attribute_inspection_id')->index('attribute_attributes_inspections2');
            $table->unsignedBigInteger('qaqc_certificate_id')->index('certificates_attributes_inspections2');
            $table->boolean('checked')->default(false);
            $table->date('date')->nullable();
            $table->string('defects', 300)->nullable();
            $table->string('initial', 50)->nullable();
            $table->string('notes', 300)->nullable();
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
        Schema::dropIfExists('certificate_attribute_2_inspections');
    }
}
