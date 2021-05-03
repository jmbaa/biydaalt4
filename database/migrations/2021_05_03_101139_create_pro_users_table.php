<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_users', function (Blueprint $table) {
            $table->increments('pro_users_id');
            $table->string('owog');
            $table->string('ner');
            $table->string('huis');
            $table->date('torson_ognoo');
            $table->string('geriin_hayg');
            $table->string('mail');
            $table->string('utas');
            $table->string('rd');
            $table->string('password');
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
        Schema::dropIfExists('pro_users');
    }
}
