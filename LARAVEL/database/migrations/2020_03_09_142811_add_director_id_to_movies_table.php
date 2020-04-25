<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDirectorIdToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {

          $table->unsignedBigInteger('director_id')->nullable();
          $table->foreign('director_id')->references('id')->on('directors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign('director_id');
            $table->dropColumn('director_id');
        });
    }
}
