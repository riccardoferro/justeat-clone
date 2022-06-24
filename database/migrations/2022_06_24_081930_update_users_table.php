<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->string('company');
            $table->string('address');
            $table->string('partita_iva')->unique();
            $table->string('image');
            $table->string('slug')->unique();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('company');
            $table->dropColumn('address');
            $table->dropColumn('partita_iva');
            $table->dropColumn('image');
            $table->dropColumn('slug');

        });
    }
}
