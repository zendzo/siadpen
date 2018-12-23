<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis', 100)->nullable();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('birth_date')->nullable();
            $table->integer('gender_id')->unsigned()->default(1);
            $table->string('phone', 15)->nullable();
            $table->string('address', 200)->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('tingkat_id')->unsigned();
            $table->integer('kelas_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            $table->date('registered_at')->nullable();
            $table->string('biaya', 100)->nullable();
            $table->boolean('confirmed')->nullable()->default(false);
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
        Schema::dropIfExists('siswas');
    }
}
