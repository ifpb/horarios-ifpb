<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_professor', function (Blueprint $table) {
            $table->primary(['day_id', 'professor_id']);

            $table->unsignedInteger('day_id');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');

            $table->unsignedInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');

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
        Schema::dropIfExists('day_professor');
    }
}
