<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class PostLike extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'post_id', 'person_id'
  ];

  /**
   *
   * @var \App\Models\PostLike $postLike
   */
  private $postLike;

  /**
   * Create a new model instance.
   *
   * @* @param PostLike $postLike
   *
   * @return void
   */
  //
}
