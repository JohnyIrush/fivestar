<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");

            $table->text("firstname");
            $table->text("lastname");
            $table->text("bio");
            $table->text("career");
            $table->integer("gender_id");
            $table->text("address");

            $table->text("title");

            $table->string("type");
            $table->text("category_id");
            $table->text("occupation_id");

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
        Schema::dropIfExists('staff');
    }
}
