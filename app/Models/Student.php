<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class Student extends Model {

  use HasUuid;

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'person_id'
  ];

  /**
   *
   * @var \App\Models\Student $student
   */
  private $student;

  /**
   * Create a new model instance.
   *
   * @* @param Student $student
   *
   * @return void
   */
  // public function __construct(Student $student) {
  //     $this->student = $student;
  // }

  /**
   *
   */
  public function person() {
    return $this->belongsTo(Person::class);
  }

  /**
   *
   */
  public function ratings() {
    return $this->hasMany(Rating::class);
  }
}
