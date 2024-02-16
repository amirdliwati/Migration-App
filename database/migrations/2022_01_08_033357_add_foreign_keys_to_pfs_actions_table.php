<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPfsActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pfs_actions', function (Blueprint $table) {
            $table->foreign(['performance_id'], 'perform_actions_FK')->references(['id'])->on('performances')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pfs_actions', function (Blueprint $table) {
            $table->dropForeign('perform_actions_FK');
        });
    }
}
