<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_name', 200)->nullable();
            $table->string('description', 300)->nullable();
            $table->string('manufacturer', 200)->nullable();
            $table->string('serial_number', 200)->nullable();
            $table->unsignedBigInteger('receive_id')->index('receive_item');
            $table->text('notes')->nullable();
            $table->boolean('status')->default(false)->comment('	0-> unused 1->used 2->maintenance');
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
        Schema::dropIfExists('item_informations');
    }
}
