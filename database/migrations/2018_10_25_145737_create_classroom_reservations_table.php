<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('restrict');

            $table->unsignedInteger('day_id');
            $table->foreign('day_id')->references('id')->on('days')->onDelete('restrict');

            $table->unsignedInteger('time_id');
            $table->foreign('time_id')->references('id')->on('times')->onDelete('restrict');

            $table->unsignedInteger('teaching_class_id');
            $table->foreign('teaching_class_id')->references('id')->on('teaching_classes')->onDelete('cascade');

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
        Schema::dropIfExists('classroom_reservations');
    }
}
