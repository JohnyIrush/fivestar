<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");

            $table->text("firstname");
            $table->text("lastname");
            $table->text("bio")->nullable();
            $table->integer("gender_id");

            $table->text("address");
            $table->integer("city_id");
            $table->integer("town_id");

            $table->text("title")->nullable();

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
        Schema::dropIfExists('guardians');
    }
}
