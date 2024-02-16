<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('notes')->nullable();
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_time_sheets');
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
        Schema::dropIfExists('time_sheets');
    }
}
