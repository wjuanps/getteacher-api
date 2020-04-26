<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 *
 * @author Juan Soares
 */
class CreatePeopleTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('people', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->uuid('uuid');
      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->bigInteger('address_id')->unsigned();
      $table->foreign('address_id')->references('id')->on('addresses');
      $table->enum('type', ['S', 'T']);
      $table->string('name', 100);
      $table->string('cpf', 25)->unique()->default(Str::random(10));
      $table->string('identifier', 25)->unique()->default(Str::random(10));
      $table->date('date_of_birth')->nullable();
      $table->string('photo', 100)->nullable();
      $table->enum('gender', ['Undefined', 'Male', 'Female'])->default('Undefined');
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
    Schema::dropIfExists('people');
  }
}
