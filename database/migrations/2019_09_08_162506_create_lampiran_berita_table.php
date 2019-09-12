<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLampiranBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_berita', function (Blueprint $table) {
            $table->String('ID_lampiran',10)->primary();
            $table->string('lampiran',30);
            $table->String('ID_berita',10);
            $table->foreign('ID_berita')->references('ID_berita')->on('berita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lampiran_berita');
    }
}
