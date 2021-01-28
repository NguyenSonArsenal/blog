<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64);
            $table->string('email', 64)->unique();
            $table->string('phone_number', 15)->unique();
            $table->string('avatar', 255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address', 255)->nullable();
            $table->integer('gender')->default(getConfig('gender_column.girl'))->comment('girl:0, boy:1')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('del_flag')->default(getConfig('del_flag_column.active'))->comment('active:0, deleted:1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

