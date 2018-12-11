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
            $table->string('name', 100);
            $table->integer('tingkat_id')->unsigned();
            $table->integer('kelas_id')->unsigned();
            $table->integer('ruang_id')->unsigned();
            $table->date('registered_at')->nullable();
            $table->string('biaya', 100)->nullable();
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
