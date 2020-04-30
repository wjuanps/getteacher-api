<?php

namespace App\Http\Resources;

use App\Http\Resources\Person as PersonResource;

use Illuminate\Http\Resources\Json\JsonResource;

class Teacher extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "about" => $this->about,
      "hour_of_class" => $this->hour_of_class,
      "kind_of_class" => $this->kind_of_class,
      "person" => new PersonResource($this->person)
    );
  }
}
