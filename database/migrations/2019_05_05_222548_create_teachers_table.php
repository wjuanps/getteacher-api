<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreateTeachersTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('teachers', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('person_id')->unsigned();
      $table->foreign('person_id')->references('id')->on('people');
      $table->longText('about')->nullable();
      $table->integer('hour_of_class')->default(0);
      $table->enum('kind_of_class', ['Presencial', 'Online', 'Presencial ou Online'])->default('Presencial ou Online');
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('teachers');
  }
}
