<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");

            $table->text("firstname");
            $table->text("lastname");
            $table->text("bio");
            $table->integer("guardian_id");
            $table->integer("gender_id");
            $table->text("address");

            $table->text("role");

            $table->integer("Admno");
            $table->integer("section_id");
            $table->integer("stream_id");
            $table->integer("level_id");

            $table->integer("hostel_id");

            $table->text("previous_school");

            $table->string("type");

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
        Schema::dropIfExists('students');
    }
}
