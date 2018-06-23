<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thesis', function (Blueprint $table) {
            $table->increments('thesisId');
            $table->string('thesisTitle', 100)->nullable(false);
            $table->unsignedInteger('mem1Id')->default(null);
            $table->unsignedInteger('mem2Id')->default(null);
            $table->unsignedInteger('mem3Id')->default(null);
            $table->foreign('mem1Id')->references('memId')->on('members');
            $table->foreign('mem2Id')->references('memId')->on('members');
            $table->foreign('mem3Id')->references('memId')->on('members');
            $table->string('supName', 100)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theses');
    }
}
