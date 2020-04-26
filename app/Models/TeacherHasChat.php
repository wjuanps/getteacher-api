<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class TeacherHasChat extends Model {

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
    'chat_id', 'teacher_id'
  ];

  /**
   *
   * @var \App\Models\TeacherHasChat $teacherHasChat
   */
  private $teacherHasChat;

  /**
   * Create a new model instance.
   *
   * @* @param TeacherHasChat $teacherHasChat
   *
   * @return void
   */
  public function __construct(TeacherHasChat $teacherHasChat) {
    $this->teacherHasChat = $teacherHasChat;
  }
}
