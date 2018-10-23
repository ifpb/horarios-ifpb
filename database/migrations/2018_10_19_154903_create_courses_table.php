<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('initials');
            $table->string('periods');

            $table->unsignedInteger('teaching_unit_id');
            $table->foreign('teaching_unit_id')->references('id')->on('teaching_units')->onDelete('restrict');

            $table->unsignedInteger('education_level_id');
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onDelete('restrict');

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
        Schema::dropIfExists('courses');
    }
}
