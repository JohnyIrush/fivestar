<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer("purchase_number");
            $table->integer("supplier_id");
            $table->integer("warehouse_id");
            $table->integer("price");
            $table->date("date");
            $table->boolean("status");
            $table->integer("quantity");
            $table->integer("total");
            $table->boolean("received");
            $table->boolean("missing");
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
        Schema::dropIfExists('purchases');
    }
}
