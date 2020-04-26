<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class Schedule extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'teacher_id', 'student_id', 'date', 'duration', 'need', 'status'
  ];

  /**
   *
   * @var \App\Models\Schedule $schedule
   */
  private $schedule;

  /**
   * Create a new model instance.
   *
   * @* @param Schedule $schedule
   *
   * @return void
   */
  public function __construct(Schedule $schedule) {
    $this->schedule = $schedule;
  }
}
