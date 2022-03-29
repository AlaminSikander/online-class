<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddClassSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_class_schedules', function (Blueprint $table) {
            $table->id()->startingValue(7001)->unique();
            $table->string('CS_Class');
            $table->foreignId('t_id');
            $table->foreignId('subject_id');
            $table->string('CS_Link');
            $table->date('CS_date');
            $table->time('CS_EndTime');
            $table->time('CS_StartTime');
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
        Schema::dropIfExists('add_class_schedules');
    }
}
