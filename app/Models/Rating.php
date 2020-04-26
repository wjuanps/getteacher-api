<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class Rating extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'teacher_id', 'student_id', 'comment', 'didactic', 'sympathy', 'knowledge'
  ];

  /**
   *
   * @var \App\Models\Rating $rating
   */
  private $rating;

  /**
   * Create a new model instance.
   *
   * @* @param Rating $rating
   *
   * @return void
   */
  // public function __construct(Rating $rating) {
  //     $this->rating = $rating;
  // }

  public function student() {
    return $this->belongsTo(Student::class);
  }
}
