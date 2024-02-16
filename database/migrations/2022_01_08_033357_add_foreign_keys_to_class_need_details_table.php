<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClassNeedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('class_need_details', function (Blueprint $table) {
            $table->foreign(['item_id'], 'need_item_FK')->references(['id'])->on('items')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['class_need_id'], 'parent_need_FK')->references(['id'])->on('class_needs')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_need_details', function (Blueprint $table) {
            $table->dropForeign('need_item_FK');
            $table->dropForeign('parent_need_FK');
        });
    }
}
