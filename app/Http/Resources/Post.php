<?php

namespace App\Http\Resources;

use App\Http\Resources\PostTag as PostTagResources;
use App\Http\Resources\PostDeslike as PostDeslikeResources;
use App\Http\Resources\PostLike as PostLikeResources;
use App\Http\Resources\PostComment as PostCommentResource;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return [
      "id" => $this->getUuid(),
      "title" => $this->title,
      "slug" => $this->slug,
      "body" => $this->body,
      "field" => $this->field,
      "category" => $this->category,
      "status" => $this->status,
      "comments" => PostCommentResource::collection($this->comments),
      "tags" => PostTagResources::collection($this->tags),
      "likes" => PostLike::collection($this->likes),
      "deslikes" => PostDeslike::collection($this->deslikes)
    ];
  }
}
