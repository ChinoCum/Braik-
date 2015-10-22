<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table -> foreign('cod_curso') -> references('id') -> on('courses');
            $table -> foreign('id_school') -> references('id') -> on('schools');
        });
        
        Schema::table('classes', function ($table) {
            $table -> foreign('cod_course') -> references('id') -> on('courses');
            $table -> foreign('cod_teacher') -> references('id') -> on('teachers');
        });
        
        Schema::table('grades', function ($table) {
            $table -> foreign('user_id') -> references('id') -> on('users');
            $table -> foreign('cod_course') -> references('id') -> on('courses');
            $table -> foreign('cod_class') -> references('id') -> on('classes');
        });
        
        Schema::table('events', function ($table) {
            $table -> foreign('id_school') -> references('id') -> on('schools');
        });
        
        Schema::table('homeworks', function ($table) {
            $table -> foreign('cod_teacher') -> references('id') -> on('teachers');
            $table -> string('grado',10);
            $table -> string('seccion',10);
        });
        
        Schema::table('announcements', function ($table) {
            $table -> foreign('cod_course') -> references('id') -> on('courses');
        });
        
        Schema::table('contents', function ($table) {
            $table -> foreign('cod_maestro') -> references('id') -> on('teachers');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table -> dropForeign('users_cod_curso_foreign');
            $table -> dropForeign('users_id_school_foreign');
        });
        
        Schema::table('classes', function ($table) {
            $table -> dropForeign('classes_cod_course_foreign');
            $table -> dropForeign('classes_cod_teacher_foreign');
        });
        
        Schema::table('grades', function ($table) {
            $table -> dropForeign('grades_user_id_foreign');
            $table -> dropForeign('grades_cod_course_foreign');
            $table -> dropForeign('grades_cod_class_foreign');
        });
        
        Schema::table('events', function ($table) {
            $table -> dropForeign('events_id_school_foreign');
        });
        
        Schema::table('homeworks', function ($table) {
            $table -> dropForeign('homeworks_cod_teacher_foreign');
        });
        
        Schema::table('announcements', function ($table) {
            $table -> dropForeign('announcements_cod_course_foreign');
        });
        
        Schema::table('contents', function ($table) {
            $table -> dropForeign('contents_cod_maestro_foreign');
        });
        
    }
}
