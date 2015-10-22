<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('username',100);
            $table -> string('email',100)->unique();
            $table -> string('firstname',100);
            $table -> string('lastname',100);
            $table -> string('password',100);
            $table -> integer('cod_curso')->unsigned();
            $table -> integer('id_school')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
