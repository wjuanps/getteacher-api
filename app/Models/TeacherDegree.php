<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class TeacherDegree extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'teacher_id', 'degree', 'intitution', 'course',
    'diploma', 'year_of_start', 'year_of_end'
  ];

  /**
   *
   * @var \App\Models\TeacherDegree $teacherDegree
   */
  private $teacherDegree;

  /**
   * Create a new model instance.
   *
   * @* @param TeacherDegree $teacherDegree
   *
   * @return void
   */
  // public function __construct(TeacherDegree $teacherDegree) {
  //     $this->teacherDegree = $teacherDegree;
  // }
}
