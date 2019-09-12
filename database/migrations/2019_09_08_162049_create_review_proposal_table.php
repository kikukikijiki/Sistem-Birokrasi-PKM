<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewProposalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_proposal', function (Blueprint $table) {
            $table->String('ID_review',10)->primary();
            $table->float('nilai');
            $table->text('catatan');
            $table->String('ID_proposal',10);
            $table->foreign('ID_proposal')->references('ID_proposal')->on('proposal_pengajuan');
            $table->String('reviewer',20);
            $table->foreign('reviewer')->references('username')->on('reviewer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_proposal');
    }
}
