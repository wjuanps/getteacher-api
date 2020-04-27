<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rating extends JsonResource {
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
      "didactic" => $this->didactic,
      "sympathy" => $this->sympathy,
      "knowledge" => $this->knowledge,
      "created_at" => $this->created_at,
    );
  }
}
