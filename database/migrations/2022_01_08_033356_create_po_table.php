<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePOTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial', 50)->nullable();
            $table->date('date')->nullable();
            $table->unsignedBigInteger('company_id')->nullable()->index('po_com_FK');
            $table->unsignedBigInteger('employee_id')->nullable()->index('po_Emp_FK');
            $table->boolean('status')->nullable()->default(false)->comment('0-> Pending 1-> In Progress 2-> completed 3-> Canceled 4-> Requested For Modifying 5->created Invoice 6->Requested For Modifying Financial 7->Archive');
            $table->text('file_path')->nullable();
            $table->text('notes')->nullable();
            $table->date('duedate')->nullable();
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
        Schema::dropIfExists('purchaseorders');
    }
}
