<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypals', function (Blueprint $table) {
            $table->id();
            $table->string("payment_id");
            $table->string("create_time");
            $table->string("payer_country_code");
            $table->string("payer_email");
            $table->string("payer_name");
            $table->string("payer_id");

            $table->string("currency_code");
            $table->integer("amount");

            $table->string("payment_status");

            $table->string("update_time");
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
        Schema::dropIfExists('paypals');
    }
}
