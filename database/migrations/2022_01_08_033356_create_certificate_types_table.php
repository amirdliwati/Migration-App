<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_certificate', 200);
            $table->string('name_certificate', 150);
            $table->string('short_name', 20)->nullable();
            $table->text('reference');
            $table->text('notes')->nullable();
            $table->text('path_pdf')->nullable();
            $table->text('path_docx')->nullable();
            $table->unsignedTinyInteger('status_programming')->nullable()->comment('0 => not completed 1 => controller completed 2 => controller & preview completed 3 => edit 4 => done 5 => not done 6 => form builder Calibration 7 => form builder Inspection 8 => form builder Engineering Services');
            $table->text('notes_programming')->nullable();
            $table->text('info_certificate')->nullable();
            $table->text('description')->nullable();
            $table->text('specification')->nullable();
            $table->longText('results')->nullable();
            $table->unsignedBigInteger('id_section')->index('certificate-type-section');
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
        Schema::dropIfExists('certificate_types');
    }
}
