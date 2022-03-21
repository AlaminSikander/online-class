<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('tName');
            $table->string('tImage');
            $table->foreignId('subject_id');
            $table->string('tGender');
            $table->date('tBOD');
            $table->string('tMobile');
            $table->date('tJD');
            $table->string('tUsername');
            $table->string('tEmail');
            $table->string('tPassword');
            $table->string('tAddress');
            $table->string('tCity');
            $table->string('tState');
            $table->string('tZipcode');

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
        Schema::dropIfExists('add_teachers');
    }
}
