<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateSchedulesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('schedules', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('teacher_id')->unsigned();
      $table->foreign('teacher_id')->references('id')->on('teachers');
      $table->bigInteger('student_id')->unsigned();
      $table->foreign('student_id')->references('id')->on('students');
      $table->dateTime('date');
      $table->string('duration', 10);
      $table->longText('need');
      $table->tinyInteger('status');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('schedules');
  }
}
