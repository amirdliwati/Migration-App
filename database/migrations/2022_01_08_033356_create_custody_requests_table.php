<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustodyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custody_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('status')->comment('0 -> Not Accepted , 1 -> Accepted 2 -> Returned');
            $table->unsignedBigInteger('employee_id')->index('custody_employee');
            $table->unsignedBigInteger('employee_from_id')->index('custody_employee_from');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('category_id')->index('custody_category');
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('from_emp_id')->nullable()->index('custody_employee_inventory')->comment('استلمت من');
            $table->unsignedBigInteger('item_id')->nullable()->index('custody_item');
            $table->text('notes_after_returned')->nullable();
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
        Schema::dropIfExists('custody_requests');
    }
}
