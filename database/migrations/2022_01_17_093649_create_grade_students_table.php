<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_students', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_grade');
            $table->unsignedBigInteger('id_student');
            $table->timestamps();

            // $table->foreign('id_grade')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('id_student')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_students');
    }
}
