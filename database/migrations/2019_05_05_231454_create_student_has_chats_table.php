<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateStudentHasChatsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('student_has_chats', function (Blueprint $table) {
      $table->bigInteger('chat_id')->unsigned();
      $table->uuid('uuid');
      $table->foreign('chat_id')->references('id')->on('chats');
      $table->bigInteger('student_id')->unsigned();
      $table->foreign('student_id')->references('id')->on('students');
      $table->primary(['chat_id', 'student_id']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('student_has_chats');
  }
}
