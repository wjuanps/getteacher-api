<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class PostTag extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'tag', 'post_id'
  ];

  /**
   *
   * @var \App\Models\PostTag $postTag
   */
  private $postTag;

  /**
   * Create a new model instance.
   *
   * @* @param PostTag $postTag
   *
   * @return void
   */
  // public function __construct(PostTag $postTag) {
  //     $this->postTag = $postTag;
  // }
}
