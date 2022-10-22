<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('reg');
            $table->string('birth');
            $table->string('idcard');
            $table->string('p1');
            $table->string('p2');
            $table->string('county');
            $table->string('sub');
            $table->string('add1');
            $table->string('add2');
            $table->string('course');
            $table->string('school');
            $table->string('dep');
            $table->string('year');
            $table->string('email');
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
        Schema::dropIfExists('student_infos');
    }
}
