<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateRatingsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('ratings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('teacher_id')->unsigned();
      $table->foreign('teacher_id')->references('id')->on('teachers');
      $table->bigInteger('student_id')->unsigned();
      $table->foreign('student_id')->references('id')->on('students');
      $table->string('comment', 200);
      $table->tinyInteger('didactic')->default(1);
      $table->tinyInteger('sympathy')->default(1);
      $table->tinyInteger('knowledge')->default(1);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('ratings');
  }
}
