<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('notes')->nullable();
            $table->text('file_path')->nullable();
            $table->unsignedBigInteger('purchaseorder_id')->nullable()->index('po_service_tickets');
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
        Schema::dropIfExists('service_tickets');
    }
}
