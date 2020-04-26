<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class ForumAnswer extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'forum_id', 'teacher_id', 'answer'
  ];

  /**
   *
   * @var \App\Models\ForumAnswer $forumAnswer
   */
  private $forumAnswer;

  /**
   * Create a new model instance.
   *
   * @* @param ForumAnswer $forumAnswer
   *
   * @return void
   */
  // public function __construct(ForumAnswer $forumAnswer) {
  //     $this->forumAnswer = $forumAnswer;
  // }

  /**
   *
   */
  public function teacher() {
    return $this->belongsTo(Teacher::class);
  }
}
