<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateForumsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('forums', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('student_id')->unsigned();
      $table->foreign('student_id')->references('id')->on('students');
      $table->bigInteger('category_id')->unsigned();
      $table->foreign('category_id')->references('id')->on('categories');
      $table->string('subject', 150);
      $table->string('question', 200);
      $table->string('complement', 200);
      $table->integer('status')->default(1);
      $table->string('image', 100)->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('forums');
  }
}
