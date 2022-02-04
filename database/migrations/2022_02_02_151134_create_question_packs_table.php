<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_packs', function (Blueprint $table) {
            $table->id();
            $table->string('question_pack_code', 20)->unique();
            $table->string('question_pack_name', 20)->nullable();
            $table->enum('semester', ['ganjil', 'genap'])->default('ganjil');
            $table->year('school_year_start');
            $table->year('school_year_end');
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
        Schema::dropIfExists('question_packs');
    }
}
