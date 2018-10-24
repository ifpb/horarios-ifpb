<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('teaching_unit_id')->nullable();
            $table->foreign('teaching_unit_id')->references('id')->on('teaching_units')->onDelete('set null');

            $table->unsignedInteger('employment_bond_id')->nullable();
            $table->foreign('employment_bond_id')->references('id')->on('employment_bonds')->onDelete('set null');

            $table->unsignedInteger('employment_type_id')->nullable();
            $table->foreign('employment_type_id')->references('id')->on('employment_types')->onDelete('set null');

            $table->string('name');
            $table->string('nickname');
            $table->string('email')->nullable();
            $table->unsignedInteger('phone')->nullable();

            $table->boolean('active')->default(true);

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
        Schema::dropIfExists('professors');
    }
}
