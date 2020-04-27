<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Person as PersonResource;
use App\Http\Resources\Rating as RatingResource;

class Student extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "person" => new PersonResource($this->person),
      "ratings" => RatingResource::collection($this->ratings)
    );
  }
}
