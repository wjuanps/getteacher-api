<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateChatsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('chats', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->integer('sender');
      $table->integer('recipient');
      $table->longText('message');
      $table->tinyInteger('read')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('chats');
  }
}
