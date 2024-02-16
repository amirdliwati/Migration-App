<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfsActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pfs_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('performance_id')->index('perform_actions_FK');
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
        Schema::dropIfExists('pfs_actions');
    }
}
