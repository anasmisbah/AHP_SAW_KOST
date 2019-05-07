<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerbandingankriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbandingankriterias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('criteria1_id');
            $table->foreign('criteria1_id')->references('id')->on('criterias')->onDelete('cascade');
            $table->unsignedBigInteger('criteria2_id');
            $table->foreign('criteria2_id')->references('id')->on('criterias')->onDelete('cascade');
            $table->double('nilai');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('perbandingankriterias');
    }
}
