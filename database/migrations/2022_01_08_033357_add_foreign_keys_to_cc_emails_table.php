<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCcEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cc_emails', function (Blueprint $table) {
            $table->foreign(['company_id'], 'cc_emails_company')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cc_emails', function (Blueprint $table) {
            $table->dropForeign('cc_emails_company');
        });
    }
}
