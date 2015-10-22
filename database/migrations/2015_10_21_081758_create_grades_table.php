<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table -> increments('id');
            $table -> integer('user_id')->unsigned();
            $table -> integer('cod_course')->unsigned();
            $table -> integer('cod_class')->unsigned();
            $table -> string('notas_especificas',10);
            $table -> string('unit',50);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grades');
    }
}
