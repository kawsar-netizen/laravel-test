<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddDesignationToEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employess', function (Blueprint $table) {
            $table->string('designation')->nullable()->after('email');
            $table->integer('family_members')->nullable()->change();
            $table->string('email',90)->change();
            $table->renameColumn('name', 'user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employess', function (Blueprint $table) {
            $table->dropColumn('designation');
        });
    }
}
