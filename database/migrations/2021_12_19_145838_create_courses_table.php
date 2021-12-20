<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->longText('name');
            $table->string('credits');
            $table->string('duration');
            $table->string('modality');
            $table->string('delivery');
            $table->bigInteger('mnqf_id')->unsigned();
            $table->foreign('mnqf_id')->references('id')->on('mnqfs');
            $table->bigInteger('institute_id')->unsigned();
            $table->foreign('institute_id')->references('id')->on('institutes');
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
