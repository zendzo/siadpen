<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birth_date')->nullable();
            $table->date('registered_at')->nullable();
            $table->integer('gender_id')->unsigned()->default(1);
            $table->string('phone', 15)->nullable();
            $table->string('address', 200)->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('gurus');
    }
}
