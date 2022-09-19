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

            $table->string("firstname");
            $table->string("lastname");
            $table->text("bio");
            $table->string("career");
            $table->integer("gender_id");
            $table->string("address");

            $table->string("title");

            $table->string("type");
            $table->integer("category_id");
            $table->integer("occupation_id");

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
