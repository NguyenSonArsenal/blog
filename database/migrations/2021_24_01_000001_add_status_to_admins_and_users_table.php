<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use \App\Model\Entities\User;

class AddStatusToAdminsAndUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->integer('status')->after('email')->nullable()->default(0)->comment(' active:0, disable:1');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->after('gender')->nullable()->default(0)->comment(' active:0, disable:1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function($table) {
            $table->dropColumn('status');
        });

        Schema::table('users', function($table) {
            $table->dropColumn('status');
        });
    }
}
