<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
          $table->increments('memId');
          $table->timestamps();
          $table->string('memName', 100)->default('null');
          $table->string('email', 100)->unique();
          $table->string('contact', 50)->default('null')->nullable();
          $table->string('cnic', 20)->default('null')->nullable();
          $table->string('address', 200)->default('null')->nullable();
          $table->string('dept', 100)->default('null')->nullable();
          $table->string('memType', 4)->nullable(false);
          $table->string('password', 100)->nullable(false);
          $table->string('regNo', 20)->default('null')->nullable();
          $table->string('picLink', 200)->default('null')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
