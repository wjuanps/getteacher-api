<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostComment extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "comment" => $this->comment,
      "created_at" => $this->created_at
    );
  }
}
