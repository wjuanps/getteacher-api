<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreatePhonesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('phones', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('person_id')->unsigned();
      $table->foreign('person_id')->references('id')->on('people');
      $table->string('number', 15);
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
    Schema::dropIfExists('phones');
  }
}
