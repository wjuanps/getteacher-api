<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateOfferedClassesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('offered_classes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('teacher_id')->unsigned();
      $table->foreign('teacher_id')->references('id')->on('teachers');
      $table->bigInteger('category_id')->unsigned();
      $table->foreign('category_id')->references('id')->on('categories');
      $table->string('specialty', 70);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('offered_classes');
  }
}
