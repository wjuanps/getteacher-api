<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreatePostLikesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('post_likes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('post_id')->unsigned();
      $table->foreign('post_id')->references('id')->on('posts');
      $table->bigInteger('person_id')->unsigned();
      $table->foreign('person_id')->references('id')->on('people');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('post_likes');
  }
}
