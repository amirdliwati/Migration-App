<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign(['company_id'], 'Add_com_FK')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['country_id'], 'Add_country_FK')->references(['id'])->on('countries')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['employee_id'], 'Add_Emp_FK')->references(['id'])->on('employees')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['state_id'], 'Add_state_FK')->references(['id'])->on('states')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['supplier_id'], 'Add_Supplier_FK')->references(['id'])->on('suppliers')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['trainee_id'], 'Add_Trainee_FK')->references(['id'])->on('trainees')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('Add_com_FK');
            $table->dropForeign('Add_country_FK');
            $table->dropForeign('Add_Emp_FK');
            $table->dropForeign('Add_state_FK');
            $table->dropForeign('Add_Supplier_FK');
            $table->dropForeign('Add_Trainee_FK');
        });
    }
}
