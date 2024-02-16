<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('phone_type')->nullable()->comment('12 for comanies 13 for suppliers');
            $table->string('number', 20);
            $table->unsignedBigInteger('employee_id')->nullable()->index('Emp_Phone_FK');
            $table->unsignedBigInteger('company_id')->nullable()->index('Com_Phone_FK');
            $table->unsignedBigInteger('supplier_id')->nullable()->index('Supplier_Phone');
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
        Schema::dropIfExists('phones');
    }
}
