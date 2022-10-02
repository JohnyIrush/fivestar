<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileUploadQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_upload_questions', function (Blueprint $table) {
            $table->id();
            $table->integer("question_id");
            $table->string("folderId");
            $table->integer("maxFiles");
            $table->integer("maxFileSize");
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
        Schema::dropIfExists('file_upload_questions');
    }
}
