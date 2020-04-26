<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class PostComment extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'post_id', 'person_id', 'comment'
  ];

  /**
   *
   * @var \App\Models\PostComment $postComment
   */
  private $postComment;

  /**
   * Create a new model instance.
   *
   * @* @param PostComment $postComment
   *
   * @return void
   */
  // public function __construct(PostComment $postComment) {
  //     $this->postComment = $postComment;
  // }

  public function person() {
    return $this->belongsTo(Person::class);
  }
}
