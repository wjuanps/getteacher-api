<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class Teacher extends Model {

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
    'about', 'hour_of_class', 'kind_of_class'
  ];

  /**
   *
   * @var \App\Models\Teacher $teacher
   */
  private $teacher;

  /**
   * Create a new model instance.
   *
   * @* @param Teacher $teacher
   *
   * @return void
   */
  // public function __construct(Teacher $teacher) {
  //     $this->teacher = $teacher;
  // }

  /**
   *
   * @return int
   */
  public function getRating() : int {
    if (!empty($this->ratings) && count($this->ratings) > 0) {
      $sum = 0;
      foreach ($this->ratings as $rating) {
        $sum += (($rating->didactic + $rating->sympathy + $rating->knowledge) / 3);
      }
      $tot = ceil($sum / count($this->ratings));

      return $tot;
    }

    return 0;
  }

  /**
   *
   * @return int
   */
  public function getAvaregeDidactic() : int {
    if (!empty($this->ratings) and count($this->ratings) > 0) {
      $sum = 0;
      foreach ($this->ratings as $rating) {
        $sum += $rating->didactic;
      }
      $tot = ceil($sum / count($this->ratings));

      return $tot;
    }

    return 0;
  }

  /**
   *
   * @return int
   */
  public function getAvaregeSympathy() : int {
    if (!empty($this->ratings) and count($this->ratings) > 0) {
      $sum = 0;
      foreach ($this->ratings as $rating) {
        $sum += $rating->sympathy;
      }
      $tot = ceil($sum / count($this->ratings));

      return $tot;
    }

    return 0;
  }

  /**
   *
   * @return int
   */
  public function getAvaregeKnowledge() : int {
    if (!empty($this->ratings) and count($this->ratings) > 0) {
      $sum = 0;
      foreach ($this->ratings as $rating) {
        $sum += $rating->knowledge;
      }
      $tot = ceil($sum / count($this->ratings));

      return $tot;
    }

    return 0;
  }

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

  /**
   *
   */
  public function degrees() {
    return $this->hasMany(TeacherDegree::class);
  }

  /**
   *
   */
  public function classes() {
    return $this->hasMany(OfferedClass::class);
  }

  /**
   *
   */
  public function posts() {
    return $this->hasMany(Post::class);
  }
}
