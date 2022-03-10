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
            $table->id();
            $table->string('CS_Class');
            $table->string('CS_Subject');
            $table->string('CS_date');
            $table->string('CS_EndTime');
            $table->string('CS_StartTime');
           

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
