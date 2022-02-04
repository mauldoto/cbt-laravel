<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_collections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_question_pack');
            $table->unsignedBigInteger('id_question');
            $table->timestamps();

            $table->foreign('id_question_pack')->references('id')->on('question_packs')->onDelete('cascade');
            $table->foreign('id_question')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_collections');
    }
}
