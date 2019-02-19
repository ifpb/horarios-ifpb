<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('initials');
            $table->unsignedInteger('capacity');

            $table->unsignedInteger('classroom_type_id');
            $table->foreign('classroom_type_id')->references('id')->on('classroom_types')->onDelete('restrict');

            $table->unsignedInteger('block_id');
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('restrict');

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
        Schema::dropIfExists('classrooms');
    }
}
