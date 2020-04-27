<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;
use Illuminate\Support\Facades\DB;

/**
 *
 * @author Juan Soares
 */
class Post extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'teacher_id', 'title', 'slug', 'body', 'image', 'field', 'category', 'status'
  ];

  /**
   *
   * @var \App\Models\Post $post
   */
  private $post;

  /**
   * Create a new model instance.
   *
   * @* @param Post $post
   *
   * @return void
   */
  // public function __construct(Post $post) {
  //     $this->post = $post;
  // }

  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName() {
    return 'slug';
  }

  /**
   *
   */
  public function getCountCategories() {
    $categories = $this->select(
      DB::raw('count(*) AS count, category')
    )
    ->groupBy('category')
    ->limit(4)
    ->get();

    return $categories;
  }

  /**
   *
   */
  public function getCountTags() {
    $tags = PostTag::select(
      DB::raw('count(*) AS count, tag')
    )
    ->orderBy('count', 'DESC')
    ->groupBy('tag')
    ->get();

    return $tags;
  }

  /**
   *
   */
  public function comments() {
    return $this->hasMany(PostComment::class);
  }

  /**
   *
   */
  public function likes() {
    return $this->hasMany(PostLike::class);
  }

  /**
   *
   */
  public function deslikes() {
    return $this->hasMany(PostDeslike::class);
  }

  /**
   *
   */
  public function tags() {
    return $this->hasMany(PostTag::class);
  }

  /**
   *
   */
  public function teacher() {
    return $this->belongsTo(Teacher::class);
  }
}
