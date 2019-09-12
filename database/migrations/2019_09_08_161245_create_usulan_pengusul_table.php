<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsulanPengusulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan_pengusul', function (Blueprint $table) {
            $table->String('ID_usulan',10)->primary();
            $table->integer('tahun');
            $table->String('skim',20);
            $table->text('judul');
            $table->String('status_usulan',30);
            $table->integer('pendanaan');
            $table->String('proposal_pengajuan',10);
            $table->foreign('proposal_pengajuan')->references('ID_proposal')->on('proposal_pengajuan');
            $table->String('pengusul',20);
            $table->foreign('pengusul')->references('username')->on('pengusul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usulan_pengusul');
    }
}
