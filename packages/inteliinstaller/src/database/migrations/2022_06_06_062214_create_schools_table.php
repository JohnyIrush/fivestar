<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->text('school_name');
            $table->string('school_email')->unique();
            $table->string('school_address')->unique();
            $table->string('school_web');
            $table->string('school_level_id');
            $table->string('school_phone')->unique();
            $table->string('school_location');
            $table->string('school_gender_id');
            $table->string('school_type_id');
            $table->string('school_education_system_id');

            $table->integer('user_id');
            $table->integer('inteli_id');
            $table->integer('inteli_code');
            $table->boolean('installation_status')->default(false);

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
        Schema::dropIfExists('schools');
    }
}
