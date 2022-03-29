<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_exams', function (Blueprint $table) {
            $table->id()->startingValue(6001)->unique();
            $table->string('examName');
            $table->integer('examClass');
            $table->foreignId('subject_id');
            $table->string('examLink');
            $table->time('examStartTime');
            $table->time('examEndTime');
            $table->date('examDate');
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
        Schema::dropIfExists('add_exams');
    }
}
