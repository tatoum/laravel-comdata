<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id')->primary();
            $question->string('question');
            $table->increments('form_page_id');
            $table->increments('answer_id');
            $table->timestamps();

            $table->foreign('form_page_id')
                ->references('id')->on('form_pages')
                ->ondelete('cascade');
            
                $table->foreign('answer_id')
                ->references('id')->on('answers')
                ->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
