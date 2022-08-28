<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer("book_category_id");
            $table->string("title");
            $table->text("title_long")->nullable();
            $table->string("isbn")->nullable();
            $table->string("isbn13");
            $table->integer("dewey_decimal_id")->nullable();
            $table->integer("binding_id")->nullable();
            $table->integer("language_id");
            $table->date("date_published");
            $table->string("edition");
            $table->integer("pages");
            $table->string("dimensions");
            $table->text("overview");
            $table->string("image");
            $table->float("msrp")->nullable();
            $table->float("price")->nullable();
            $table->text("excerpt");
            $table->text("synopsys");
            $table->integer("no_of_copies");
            $table->string("volume");
            $table->boolean("status");
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
        Schema::dropIfExists('books');
    }
}
