<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->timestamps();
            $table->increments('bookId');
            $table->string('bookTitle', 255)->nullable('false');
            $table->unsignedInteger('edition');
            $table->unsignedInteger('authId');
            $table->unsignedInteger('catId');
            $table->foreign('catId')->references('catId')->on('books_categories');
            $table->foreign('authId')->references('authId')->on('authors');
            $table->unsignedInteger('totalAvail')->default(0);
            $table->unsignedInteger('totalIss')->default(0);

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
