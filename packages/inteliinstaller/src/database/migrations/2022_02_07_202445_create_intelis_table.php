<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intelis', function (Blueprint $table) {
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

            $table->integer('inteli_code');
            $table->boolean('installation_status');
            $table->timestamp('installation_date');
            $table->timestamp('uninstallation_date');

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
        Schema::dropIfExists('intelis');
    }
}
