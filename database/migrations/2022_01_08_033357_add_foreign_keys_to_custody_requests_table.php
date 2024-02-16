<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCustodyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('custody_requests', function (Blueprint $table) {
            $table->foreign(['category_id'], 'custody_category')->references(['id'])->on('categories')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'custody_employee')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_from_id'], 'custody_employee_from')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['from_emp_id'], 'custody_employee_inventory')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['item_id'], 'custody_item')->references(['id'])->on('items')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custody_requests', function (Blueprint $table) {
            $table->dropForeign('custody_category');
            $table->dropForeign('custody_employee');
            $table->dropForeign('custody_employee_from');
            $table->dropForeign('custody_employee_inventory');
            $table->dropForeign('custody_item');
        });
    }
}
