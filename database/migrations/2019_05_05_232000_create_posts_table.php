<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreatePostsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('posts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('teacher_id')->unsigned();
      $table->foreign('teacher_id')->references('id')->on('teachers');
      $table->string('title', 150)->unique();
      $table->string('slug', 170)->unique();
      $table->longText('body');
      $table->string('image', 170)->unique()->nullable();
      $table->string('field', 50);
      $table->string('category', 50);
      $table->enum('status', ['Aguardando', 'Aprovado', 'Reprovado'])->default('Aguardando');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('posts');
  }
}
