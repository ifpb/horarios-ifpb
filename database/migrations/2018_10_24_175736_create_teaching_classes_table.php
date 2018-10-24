<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_classes', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('restrict');

            $table->unsignedInteger('professor_id');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('restrict');

            $table->unsignedInteger('teaching_class_type_id');
            $table->foreign('teaching_class_type_id')->references('id')->on('teaching_class_types')->onDelete('restrict');

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
        Schema::dropIfExists('teaching_classes');
    }
}
